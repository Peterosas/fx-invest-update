<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
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
        return view('backend.profile.edit');
    }
    
    public function updatePassword(Request $request) {
        
        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => ['required', 'string', 'min:5', 'confirmed']
        ]);
        
        
        $newPass = $request->get("new_password");
        $currPass = $request->get("current_password");
        
        $user = \Auth::user();
        $oldPass = $user->password;
        
        if (Hash::check($currPass, $oldPass)) {
            $user->password = Hash::make($newPass);
            $user->save();
            
            return redirect()->back()->with('success', 'Password updated successfully');
        }
        
        return redirect()->back()->with('error', 'Unable to update password. Please try again later!');
    
    }
    
}
