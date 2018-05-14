<?php

namespace App\Http\Middleware;

use Closure;

class Superadmin
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
        if (auth()->check() && $request->user()->role == 'superadmin'){
            return $next($request);
        } elseif (auth()->check() && $request->user()->role == 'admin'){
            return redirect()->guest('/admin/home');
        } else {
            return redirect()->guest('/member/home');
        }

    }
}
