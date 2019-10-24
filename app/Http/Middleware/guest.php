<?php

namespace App\Http\Middleware;

use Closure;

class guest
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
        if(Auth::user()->role === "guest"){
            return redirect()->route('home');
        }else{
            return $next($request);
        }   
    }
}
