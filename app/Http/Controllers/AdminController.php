<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Rules\ValidatePackage;
use App\Investment;
use App\Package;
use App\User;
use App\Transaction;
use App\SiteSettings;
use App\WalletAddress;
use App\WalletAddressPool;

use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
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
    public function users()
    {
        $users = User::get();
        
        return view('backend.admin.users', compact('users'));
    }

    public function fund_wallet(Request $request) {

    }
    
    public function get_payments(Request $request) {
        $payments = WalletAddress::where('status', 'pending')->get();
     
        return view('backend.admin.payments', compact('payments'));
    }

    public function add_deposit_address(Request $request) {
        if (!$request->get('d')) {
            return redirect()
            ->back()
            ->with('error', 'Please provide a valid wallet address');
        }

        WalletAddressPool::insert([
            'wallet_address' => $request->get('d')
        ]);

        return redirect()
            ->back()
            ->with('success', 'Wallet address added');
    }

    public function approve_payment($id, $amount = 0) {

        if (!$id or !$amount or !is_numeric($amount) or $amount <= 0) {
            return redirect()
            ->back()
            ->with('error', 'Please provide a valid amount');
        }

        $address = WalletAddress::where('status', 'pending')->where('id', $id)->first();

        if ($address) {

            $user = $address->user;

            $trans_data = [
                'user_id' => $user->id,
                'trans_type' => 'deposit',
                'trans_code' => User::generateRefId(),
                'to_address' => $address->address,
                'amount' => $amount,
                'old_balance' => $user->total_amount,
                'new_balance' => $user->total_amount + $amount,
                'status' => 'completed',
                'description' => 'Wallet funding'
            ];

            Transaction::insert($trans_data);

            //Update balance
            $user = $address->user;
            $user->total_amount += $amount;
            $user->save();

            //Update wallet address status
            $address->used = true;
            $address->status = "completed";
            $address->save();

            return redirect()
                    ->back()
                    ->with('success', 'Payment approval was successful!');
        }

        return redirect()
                ->back()
                ->with('error', 'Failed to process payment. Please try again later!');

    }
    public function decline_payment($id) {
        if (!$id) {
            return redirect()
            ->back()
            ->with('error', 'Decline failed. Please provide a valid payment id');
        }

        $address = WalletAddress::where('id', $id)->first();
        $user = $address->user;
        $amount = 0;

        $trans_data = [
            'user_id' => $user->id,
            'trans_type' => 'deposit',
            'trans_code' => User::generateRefId(),
            'to_address' => $address->address,
            'amount' => $amount,
            'old_balance' => $user->total_amount,
            'new_balance' => $user->total_amount + $amount,
            'status' => 'declined',
            'description' => 'Wallet funding'
        ];

        Transaction::insert($trans_data);

        $address->status = "declined";
        $address->save();

        return redirect()
        ->back()
        ->with('success', 'Payment declined!');
    }
    public function site_settings(Request $request)
    {
        $site_settings = SiteSettings::first();
        
        if ($request->ajax()) {
            
            if ($request->isMethod('post')) {
                $rules = ['wallet_address' => 'required', 'referral_bonus' => 'required', 'min_balance' => 'required'];

                $data = $request->all();
                
                $validator = Validator::make($data, $rules);

                if ($validator->fails()) {
                    if ($request->ajax()) {
                        return response()->json(['message'=>'Error updating settings. Please make sure you fill all fields correctly.', 'errors' => $validator->errors()]);
                    }

                    return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
                } 
                
                //Update settings
                
                if (!$site_settings)
                    $site_settings = new SiteSettings();
                
                
                $site_settings->wallet_address = $data['wallet_address'];
                
                $site_settings->referral_bonus = $data['referral_bonus'];
                
                $site_settings->min_balance = $data['min_balance'];
                
                $site_settings->save();
                
                return response()->json(['success'=>'success', 'Settings updated', 'reload' => true ]);
                
                
            }
            
            return view('backend.admin.partials.site_settings_form', compact('site_settings'));
        }
        
        return view('backend.admin.site_settings', compact('site_settings'));
    }
    
    public function editUser(Request $request, $id) {
        
        $user = User::whereId($id)->first();
        
        if ($request->isMethod('post')) {
            
            $rules = ['total_amount' => 'required', 'total_bonus' => 'required'];

            
            $validator = Validator::make($request->all(), $rules);
          
            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json(['message'=>'Authentication failed', 'errors' => $validator->errors()]);
                }
                
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            } 
            
            $data = $request->all();
            
            $user->total_amount = $data["total_amount"];
            $user->total_bonus = $data["total_bonus"];
            
            if (isset($data['password_'])) {
                $data['password_'] = Hash::make($data['password_']);
                $user->password = $data['password_'];
               
            }
            
            $user->save();
            
            if ($request->ajax()) {
                    return response()->json(['success'=>'success', 'User updated', 'reload' => true ]);
            }
                
            return redirect()
                    ->back()
                    ->with('success', 'User updated');
        
        }
        

        return view('backend.admin.partials.edit_users_form', compact('user'));
    }
    
    public function deleteUser(Request $request, $id) {
        $deleted = User::whereId($id)->where('role', '<>', getRole('admin'))->delete();
        
        if (!$deleted) return redirect()->back()->with("error", "You can't delete an admin.");
        
        if ($request->ajax()) {
            return response()->json(['success'=>'User deleted successfully']);
        }
        
        return redirect()->back()->with('success', 'User deleted successfully');
    }
    
    public function client_requests(Request $request) {
        $ad_trans = Transaction::all();
        $total_earnings = 0;
        
        $investments = Investment::whereStatus('running')->get();
        
        foreach($investments as $investment) {
            $total_earnings += $investment->totalEarnings();
        }
        
        
        return view('backend.admin.client_requests', compact('ad_trans', 'total_earnings'));
    }
    
    public function editClientRequest(Request $request, $id) {
        $transaction = Transaction::whereId($id)->first();
        
        if ($request->isMethod('post')) {
            
            $data = $request->all();

            
            if (!isset($data['sbutton'])) {
                 return response()->json(['error'=>'Invalid inputs' ]);
            }
        
            
            
            $rules = ['amount'=>'required', 'old_balance' => 'required', 'description' => 'required'];
            
            $validator = Validator::make($request->all(), $rules);
          
            
            
            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json(['message'=>'Invalid inputs', 'errors' => $validator->errors()]);
                }
                
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            } 
        
            $type = strtolower($data["sbutton"]);
            
            
            if ($type == "decline") {
                
                if ($transaction->status != "declined") {
                    
                    $transaction->description = $data['description'];
                    $transaction->status = "declined";
                    
                    //Reverse cash
                    $user = $transaction->user;
                    if ($transaction->trans_type == "deposit")
                        $user->total_amount -= $transaction->amount;
                    else
                        $user->total_amount += $transaction->amount;

                    $investment = $transaction->investment;

                    if ($investment){
                        $investment->status = "declined";
                        $investment->save();
                    }

                    $user->save();
                }
        
            }
            else {
                if ($transaction->status != "declined") {
                    $transaction->status =  "completed";
                    $transaction->description = $data["description"];
                }
                else {
                     //Reverse cash
                    $user = $transaction->user;
                    if ($transaction->trans_type == "deposit")
                        $user->total_amount += $transaction->amount;
                    else
                        $user->total_amount -= $transaction->amount;

                    $investment = $transaction->investment;

                    if ($investment){
                        $transaction->status =  "running";
                        $investment->status = "running";
                        $investment->save();
                    }
                    else {
                        $transaction->status =  "completed";
                    }

                    $user->save();
                }
            }
            
            $transaction->save();
            
            
            if ($request->ajax()) {
                    return response()->json(['success'=>'success', 'Request confirmed', 'reload' => true ]);
            }
                
            return redirect()
                    ->back()
                    ->with('success', 'Request confirmed');
        
        }
        
        return view("backend.admin.partials.edit_client_requests_form", compact("transaction"));
    }
    
    public function deleteClientRequest(Request $request, $id) {
        
        $trans = Transaction::findOrFail($id);
        $user = $trans->user;
        
        $user->total_amount += $trans->amount;
        $user->save();
        
        $trans->delete();
    
        if ($request->ajax()) {
            return response()->json(['success'=>'Item deleted successfully']);
        }
        
        return redirect()->back()->with('success', 'Item deleted successfully');
    }
        
      
}
