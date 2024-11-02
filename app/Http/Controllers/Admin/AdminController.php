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
        return view('admin.user.index', compact('users'));
    }
    
    public function login(){
        return view('admin.login');
    }

    public function userstore(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'nullable|string',
            'mobile' => 'nullable|string|max:15',
            'aadhar' => 'nullable|string|max:12',
            'address' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:100',
            'pincode' => 'nullable|string|max:6',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'aadhar_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pan_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file uploads
        $photoPath = $request->file('photo') ? $request->file('photo')->store('photos') : null;
        $aadharPhotoPath = $request->file('aadhar_photo') ? $request->file('aadhar_photo')->store('aadhar_photos') : null;
        $panPhotoPath = $request->file('pan_photo') ? $request->file('pan_photo')->store('pan_photos') : null;

        // Create the user
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = $request->input('role');
        $user->mobile = $request->input('mobile');
        $user->aadhar = $request->input('aadhar');
        $user->address = $request->input('address');
        $user->state = $request->input('state');
        $user->pincode = $request->input('pincode');
        $user->status = 'deactive'; // Default status

        // Set file paths for uploaded files
        $user->photo = $photoPath;
        $user->aadhar_photo = $aadharPhotoPath;
        $user->pan_photo = $panPhotoPath;

        // Save the user to the database
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User created successfully!');
    }

    public function do_login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');
        
        Log::info('Login attempt', ['credentials' => $credentials]);

        if (Auth::attempt($credentials)) {
            // Regenerate session on successful login
            // $request->session()->regenerate();

            Log::info('Login successful', ['user' => Auth::user()]);

            // Check if the user has an 'admin' role
            if (Auth::user()->role === 'admin') {
                return response()->json([
                    'message' => 'Admin login successful',
                    'user' => Auth::user(),
                    'success'=>1
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
