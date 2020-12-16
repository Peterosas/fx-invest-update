<?php

namespace App\Http\Middleware;

use Closure;

class SiteMaintenanceChecker
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
        if ($request->user() && config('app.maintenance_mode') == true && $request->path() != 'maintenance') 
            return redirect('maintenance');
        return $next($request);
    }
}
