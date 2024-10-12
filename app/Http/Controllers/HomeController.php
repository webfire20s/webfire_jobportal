<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');  // Create a view for the login form
    }

    // Handle login logic
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to dashboard
            return redirect()->intended('/user');  // Change to your desired route
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register');  // Create a view for the registration form
    }

    // Handle registration logic
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',  // Default role for new users
        ]);

        // Log the user in
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        // Redirect to dashboard
        return redirect()->intended('/user');  // Change to your desired route
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');  // Change to your desired route
    }
}
