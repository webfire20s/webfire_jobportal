<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class AdminController extends Controller
{
    public function index()
    {
        // Return the admin dashboard view
        return view('admin.home');  // Ensure you have a view at resources/views/admin/dashboard.blade.php
    }

    public function users() {
        $users = User::where('role', 'customer')->with('transaction')->get();
        return view('admin.users.index', compact('users'));
    }
    
    public function login(){
        return view('admin.login');
    }

    public function do_login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');
        
        Log::info('Login attempt', ['credentials' => $credentials]);

        if (Auth::attempt($credentials)) {
            // Regenerate session on successful login
            $request->session()->regenerate();

            Log::info('Login successful', ['user' => Auth::user()]);

            // Check if the user has an 'admin' role
            if (Auth::user()->role === 'admin') {
                return response()->json([
                    'message' => 'Admin login successful',
                    'user' => Auth::user(),
                ], 200);
            } else {
                Auth::logout();
                Log::warning('Unauthorized access attempt', ['user' => Auth::user()]);
                return response()->json([
                    'message' => 'Unauthorized. Only admins can log in.',
                ], 401);
            }
        }

        Log::warning('Invalid login credentials', ['credentials' => $credentials]);
        return response()->json([
            'message' => 'Invalid credentials',
        ], 401);
    }


   
    // You can add more admin-specific methods here
}
