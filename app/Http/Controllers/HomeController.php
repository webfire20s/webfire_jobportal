<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');  // Create a view for the login form
    }
    public function signUpForm()
    {
        return view('sign_up');
    }

    public function signUpSubmit(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'aadhar' => 'required|string|max:20',
            'mobile' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'pincode' => 'required|string|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'aadharImage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'panImage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle file uploads and store them in the `storage/app/public` directory
        $photoPath = $request->file('image') ? $request->file('image')->store('photos', 'public') : null;
        $aadharPath = $request->file('aadharImage') ? $request->file('aadharImage')->store('aadhar', 'public') : null;
        $panPath = $request->file('panImage') ? $request->file('panImage')->store('pan', 'public') : null;

        // Create a new user with the form data
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'aadhar' => $request->aadhar,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'photo' => $photoPath,
            'aadhar_photo' => $aadharPath,
            'pan_photo' => $panPath,
            'role' => 'user',  // or set any default role
            'status' => 'active',  // default status
        ]);

        // Redirect with success message
        return redirect()->route('sign_up')->with('success', 'Registration successful!');
    }

    // Handle login logic
    public function login(Request $request)
{
    \Log::info("Login attempt started for email: {$request->email}");

    // Validate the incoming request
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to authenticate the user
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication passed
        \Log::info("Login successful for email: {$request->email}");
        
        session()->flash('success', 'Login successful! Welcome back.');
        
        // Redirect the user to their intended destination (or /user as fallback)
        return redirect()->intended('/user');
    }

    // Authentication failed
    \Log::warning("Login failed for email: {$request->email}. Invalid credentials.");

    // Return with error message
    return back()->withErrors(['email' => 'Invalid credentials.'])
        ->with('error', 'Login failed! Please check your credentials and try again.');
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
