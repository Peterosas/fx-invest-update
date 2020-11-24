<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Route;
use Str;

class CheckUserActivation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    /*
        if (Auth::check()) {
            
            
            $account = Auth::user()->account_settings;
            $name = Auth::user()->displayName();
            $company = config('company.name');
            
            if(!$account and !Str::startsWith(Route::currentRouteName(), 'account')) {
                return redirect()->route('account.settings')->with('status_info', "Welcome, $name! <br /><br />Thank you for creating an account with us. 
                <br />We will guide you through securing your $company's wallet. <br />Please kindly fill the form below.");
            }
            
            if (Str::startsWith(Route::currentRouteName(), 'admin.')) {
                if (Auth::user()->role != getRole('admin')) {
                    return redirect()->route('dashboard');
                }
            }
        }
        */
        return $next($request);
    }
}
