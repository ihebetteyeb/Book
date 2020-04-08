<?php

namespace App\Http\Middleware;

use Closure;
use auth;
class Club
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
        if (Auth::check() && Auth::user()->role == 'Club') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->role == 'admin') {
        return redirect('/admin');
    }
    }
    
}
