<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Rules\ValidatePackage;
use App\Investment;
use App\Package;
use App\User;

class ReferralController extends Controller
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
    public function index()
    {
        return view('backend.referrals.index');
    }
    
    public function referral_commissions($id) {
        $referral = User::find($id);
        
        return view('backend.referrals.commissions', compact('referral'));
    }
    
      
}
