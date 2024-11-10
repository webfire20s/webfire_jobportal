<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response|mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user has the required role
            if (Auth::user()->role === $role) {
                return $next($request);
            }

            // Redirect based on the user's role if they lack permission
            if (Auth::user()->role === 'admin') {
                return redirect('/admin/login')->withErrors('Admin: You do not have permission to access this page.');
            } elseif (Auth::user()->role === 'user') {
                return redirect('/')->withErrors('User: You do not have permission to access this page.');
            }
        }

        // Redirect to a general login page if the user is not authenticated
        return redirect('/')->withErrors('You must be logged in to access this page.');
    }
}
