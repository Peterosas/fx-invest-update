<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Transaction;
use App\Investment;
use App\User;
use App\Package;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected function updateTransactionUponWithdrawal($data) {
        
        $amount = $data['amount'];
        $to_address = $data['wallet_address'];
    
        $user = \Auth::user();
        
        $old_balance = $user->total_amount;
        
        $new_balance = $old_balance - $amount;
        
        if ($new_balance < 0) {
            return getBalanceStatusCode('insufficient');
        }
        
        if ($amount < getMinWithdrawal()) {
            return getBalanceStatusCode('low');
        }
           
        $user->total_amount = $new_balance;
        $user->save();
        
        $trans = new Transaction();
        
        $trans->user_id = \Auth::id();
        $trans->amount = $amount;
        $trans->to_address = $to_address;
    
        $trans->trans_type = 'withdrawal';
        $trans->description = 'Withdrawal - ' . formatAmount($amount);
        $trans->trans_code = User::generateRefId();
        $trans->old_balance = $old_balance;
        $trans->new_balance = $new_balance;
        $trans->status = getStatusText("pending");
        
        $trans->save();
        
        return getBalanceStatusCode('success');
    }
    
    protected function updateTransactionUponDeposit($data) {

            
        $amount = $data['amount'];
        $to_address = $data['to_address'];
        $from_address = $data['from_address'];
        $confirmations = $data['confirmations'];        
        
        //Current Logged In User
            
        $trans = Transaction::where("to_address", $to_address)->first();
        
        $trans = $trans?? new Transaction();
        
        if (isset($data['user_id'])) {
            $user = User::find($data['user_id']);
        }
        else {
            $user = \Auth::user();
        }
        
        $trans->user_id = $user->id;
        
        if ($confirmations > 2) {
        
            $old_balance = $user->total_amount;
            $new_balance = $old_balance + $amount;

            $user->total_amount = $new_balance;
            $user->save();   
            
            $trans->status = getStatusText("completed");
            $trans->old_balance = $old_balance;
            $trans->new_balance = $new_balance;
        }
        else {
            $trans->status = getStatusText("pending");
        }
        
        
        $trans->amount = $amount;
        $trans->to_address = $to_address;
        $trans->from_address = $from_address;
        $trans->trans_type = 'deposit';
        $trans->trans_code = User::generateRefId();
        
        
        $trans->save();
        
        return getBalanceStatusCode("success");
        
    }
    
    protected function updateTransactionUponInvest($data) {
        
        $amount = $data['amount'];
        $package_id = $data['package_id'];
        
        if ($amount < $this->getMinPackageInvest($package_id)) {//Minimum investment
            return getBalanceStatusCode('min_invest'); 
        }
        
        $user = \Auth::user();
        $old_balance = $user->total_amount;
        $new_balance = $user->total_amount - $amount;
        
        if ($new_balance < 0) { //Insufficient fund
            return getBalanceStatusCode('insufficient');
        }
        
        
        //calculate bonus for upline
        $sponsor = $user->sponsor();
        
        if($sponsor) {
            $bonus = computeBonus($amount);
            $sponsor->total_amount += $bonus;
            $sponsor->total_bonus += $bonus;
            $sponsor->save();
        }
        
        
        //Calculate total amount
        $user->total_amount = $new_balance;
        $user->save();
         
        $trans = new Transaction();
            
        $trans->user_id = \Auth::id();
        $trans->amount = $amount;
        $trans->trans_type = 'investment';
        $trans->trans_code = User::generateRefId();
        $trans->old_balance = $old_balance;
        $trans->new_balance = $new_balance;
        $trans->status = getStatusText("running");
        
        $trans->save();
        
        $investment = new Investment();
        
        $investment->invest_code = User::generateRefId();
        $investment->package_id = $package_id;
        $investment->user_id = $user->id;
        $investment->trans_id = $trans->id;
        $investment->amount = $amount;
        $investment->roi = $this->computeROI($amount, $package_id);
        $investment->status = getStatusText('running');
        $investment->description = 'Investment - ' . formatAmount($amount);
        $investment->save();
        
        return getBalanceStatusCode("success");
    }
    
    
    public function getMinPackageInvest($package_id){
        $min_invest = 0;
        
        $package = Package::find($package_id);
        
        if ($package) {
            $min_invest = $package->min_amount;
        }
        
        return $min_invest;
    }
    
    public function computeROI($amount, $package_id) {
        $roi = 0;
        
        $package = Package::find($package_id);
        
        if ($package) {
            $roi_percent = $package->roi/100;
            $roi = $amount + ($amount * $roi_percent);
        }
        
        return $roi;
    }
        
}
