<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if (auth()->check() && $request->user()->role == 'admin'){
            return $next($request);
        } elseif (auth()->check() && $request->user()->role == 'superadmin'){
            return redirect()->guest('/superadmin/home');
        } else {
            return redirect()->guest('/member/home');
        }

    }
}
