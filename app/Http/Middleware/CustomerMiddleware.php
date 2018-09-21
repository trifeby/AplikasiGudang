<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CustomerMiddleware
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
        if (Auth::check() && Auth::user()->roler== '2')
        {        
            return $next($request);
        }

            return redirect('home');
    }
}
