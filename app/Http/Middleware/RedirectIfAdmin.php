<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user is an admin
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.home');  // Redirect to admin home
            }
        }

        return $next($request);
    }
}

