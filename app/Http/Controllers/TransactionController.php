<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Rules\ValidateTransactionHashId;
use App\Transaction;
use App\WalletAddress;
use App\User;
use Session;

class TransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['confirm_deposit', 'confirm_withdrawal']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function history()
    {
        return view('backend.transactions.history');
    }
    
    public function withdraw(Request $request)
    {
        if ($request->isMethod('post')) {
            
            $rules = [
                'amount' => 'required',
                'wallet_address' => 'required',
                'trans_pin' => [
                    'required',
                    Rule::exists('account_settings')->where(function ($query) {
                        $query->where('user_id', \Auth::id());
                    })
                ],
            ];
            
            $validator = Validator::make($request->all(), $rules);
          
            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json(['message'=>'Your request was not successful', 'errors' => $validator->errors()]);
                }
                
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            } 
            
            //Process request
            $status = $this->updateTransactionUponWithdrawal($request->all());
            
            $status_type = getBalanceStatusType($status);
            
            if ($request->ajax()) {
                
                $data[$status_type] = getBalanceStatusText($status);
                $data['reload'] = true;
                
                return response()->json($data);
            }
            else {
                return redirect()
                ->back()
                ->with($status_type, getBalanceStatusText($status));
            }
            
        }
        
        return view('backend.transactions.withdraw');
    }
    
    public function deposit(Request $request)
    {
           
        $me = \Auth::user();
        $wallet_address_obj = $me->wallet_address();
        
        if($wallet_address_obj->address)
        {
            $kxwallet_address = $wallet_address_obj->address;
        }
        else {
            $kxwallet_address = generateUniqueWalletAddress();
            
            if ($kxwallet_address) {
                $wallet_address_obj->address = $kxwallet_address;
                $wallet_address_obj->user_id = $me->id;
                $wallet_address_obj->save();
            }
            else {
                $kxwallet_address = null;
            }
            
        } 
        
        $wallet_address = $kxwallet_address;
        
        
        if ($request->ajax()) {
            return view('backend.transactions.partials.deposit', compact('wallet_address'));
        }
        
        return view('backend.transactions.deposit', compact('wallet_address'));
    }
   
    public function confirm_deposit() {
        
        //Process 20 records every 10 minutes
        $wallet_addresses = WalletAddress::where("used", false)->get()->take(20);
        
        foreach($wallet_addresses as $wallet_address) {
            
            $to_address = $wallet_address->address;

            $data = getPayment($to_address);
            
            if (count($data) > 0) {
                $confirmations = $data['confirmations'];
                
                if ($confirmations > 2) {
                    $confirmations = 3;
                    $wallet_address->used = true; //Payment confirmed
                }
                
                $wallet_address->confirmations = $confirmations;
                $wallet_address->save();
                
                $data['user_id'] = $wallet_address->user_id;
                $this->updateTransactionUponDeposit($data);
            }
            
        }
        
      
    }    
    
    public function confirm_withdrawal() {
        //$address, $id = '', $amount = 0 (dollar)
        
        $withdrawals = Transaction::where("trans_type", "withdrawal")->where("status", "pending")->take(20)->get();
        
        foreach ($withdrawals as $withdrawal) {
    
            $sent = getPayment($withdrawal->to_address, 2, $withdrawal->amount);
            
            if ($sent) {
                $withdrawal->status = "completed";
                $withdrawal->save();
            }
            
        }
        
    }
}
