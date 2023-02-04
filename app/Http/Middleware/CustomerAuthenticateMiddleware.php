<?php

namespace App\Http\Middleware;

use Closure;

class CustomerAuthenticateMiddleware
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
        if(auth()->guard('customer')->check()) {
            return $next($request);
        } else {
            return redirect('/clientlogin');
            // return redirect('/checkout');
        }
    }
}
