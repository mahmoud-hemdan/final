<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ChickAdmin
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
        if(Auth::user()&& Auth::user()->role == "admin"){

            return $next($request);
        }elseif(Auth::user()&& Auth::user()->role == "user"){
            return redirect()->route('homepage');
        }else{
            return redirect()->route('login');
        }
    }
}
