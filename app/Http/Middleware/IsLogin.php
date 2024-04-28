<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsLogin
{
    public function handle($request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->name) {
            // Redirect or handle the request as needed if the user is not active
            return redirect()->route('home')->with('error', 'Your account is not active.');
        }

        return $next($request);
    }
}
