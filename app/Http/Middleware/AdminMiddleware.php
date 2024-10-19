<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        Log::info('AdminMiddleware - Session ID: ' . session()->getId());
        Log::info('AdminMiddleware - Auth User: ', ['user' => Auth::user()]);

        // Check if user is authenticated and has 'admin' role
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        Log::warning('Unauthorized admin access attempt', ['user' => Auth::user()]);

        // Handle unauthorized access for API requests
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Unauthorized. Admin access only.'], 401);
        }

        // Redirect for web requests
        return redirect('/admin/login')->with('error', 'You are not authorized to access this page');
    }

}
