<?php

namespace App\Http\Middleware;
use Auth;

use Closure;
class AuthMake
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
        if(Auth::check()) {
            if(Auth::user()->login1 && Auth::user()->login2){
                return $next($request);
            }
        
        else {
            if(!Auth::user()->login1) {
                return redirect('/login1');

            } else if(!Auth::user()->login2) {
                return redirect('/login2');

            }

        }
        }
        else{
            return redirect('/login');
        }
  
    }
}
