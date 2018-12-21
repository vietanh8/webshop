<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class adminlogin
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
        if(Auth::check()){
            $user = Auth::user();
            if($user->account_type == 1){
               return $next($request); 
            }
            else{
                return redirect('adminlogin')->with('Error','Your account does not match this page');
            }
            
        }
        else {
            return redirect('adminlogin');
        }
        
    }
}
