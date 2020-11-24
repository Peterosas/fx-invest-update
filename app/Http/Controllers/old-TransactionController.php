<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Rules\ValidateTransactionHashId;
use App\Transaction;
use App\User;

class TransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        if ($request->isMethod('post')) {
            
            $rules = [
                'amount' => 'required',
                'trans_hash_id' => [
                    'required',
                    new ValidateTransactionHashId()
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
            
            $data = $request->all();
            
            if (checkPayment($data['trans_hash_id'], $data['amount'])) {
                $status = $this->updateTransactionUponDeposit($data);
            }
            else {
                $status = "failed";
            }
            
            $data = array();
            $status_type = getBalanceStatusType($status);
            $data[$status_type] = getBalanceStatusText($status);
            $data['reload'] = true;
            
            if ($request->ajax()) {
                return response()->json($data);
            }
            else {
                return redirect()
                    ->back()
                    ->with($status_type, $data[$status_type]);
            }
        }
        
        return view('backend.transactions.deposit');
    }
   
    
    
}
