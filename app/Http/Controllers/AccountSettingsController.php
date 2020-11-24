<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\AccountSettings;
use App\Rules\ValidatePassword;
use Illuminate\Validation\Rule;

class AccountSettingsController extends Controller
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
    public function edit(Request $request)
    {
        $as = AccountSettings::where('user_id', \Auth::id())->first();
        
        if ($request->isMethod('post')) {
            
            $rules = [
                'trans_pin' => 'required|confirmed|min:5',
            ];
            
            $data = $request->all();
            
            if (!$as) { //create a new wallet
                $as = new AccountSettings();
               
            }
                
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
            
            $as->user_id = \Auth::id();
            $as->trans_pin = $data['trans_pin'];
            $as->save();
            
            if ($request->ajax()) {
                return response()->json(['success'=>'Your request was successful.', 'reload'=>true, 'url' => route('dashboard')]);
            }
            
            return redirect()->back()->with('success', 'Account created successfully');
        }
        
        return view('backend.account.edit', compact('as'));
    }
    
    public function checkAccount(Request $request) {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'trans_pin' => [
                    'required',
                    Rule::exists('account_settings')->where(function ($query) {
                        $query->where('user_id', \Auth::id());
                    })
                ]                
            ]);
            
            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json(['message'=>'Authentication failed', 'errors' => $validator->errors()]);
                }
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            
            $update = true;
            
            if ($request->ajax()) {
                return response()->json(['success'=>'Your request was successful.', 'view' => view('backend.account.partials.form', compact('update'))->render()]);
            }
            else {
                return redirect()
                    ->back()
                    ->with('success', 'Your request was successful.');
            }
        }
        
        return view('backend.account.check_pin');
    }
    
}
