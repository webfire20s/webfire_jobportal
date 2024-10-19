<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {        
        // Log the current session ID and authenticated user
        Log::info('AdminMiddleware - Session ID: ' . session()->getId());
        Log::info('AdminMiddleware - Auth User: ', ['user' => Auth::user()]);

        // Check if user is authenticated and is an admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        Log::warning('Unauthorized admin access attempt', ['user' => Auth::user()]);

        // Redirect to your custom admin login route if the user is not authorized
        return redirect('/admin/login')->with('error', 'You are not authorized to access this page');
    }
}
