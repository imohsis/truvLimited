<?php

namespace App\Http\Middleware;

use Closure;

class CoordinatorMiddleware
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
        if(auth()->user() == null){
            return redirect('/login');
        }
        
        if(auth()->user()->role_id != \App\UserRole::$COORDINATOR){
            if(auth()->user()->role_id != \App\UserRole::$ADMINISTRATOR && auth()->user()->role_id == \App\UserRole::$MEMBER){
                return redirect('/login');
            }
        }
        
        if(auth()->user()->is_deactivate){
           // Session::flash('error','Comment Successfully deleted');

            return redirect('/login')->with('error', 'Your account has been deactivated');
        }
        return $next($request);
    }
}
