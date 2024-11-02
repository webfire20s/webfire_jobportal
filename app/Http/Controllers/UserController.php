<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from the 'users' table
        return view('admin/user/index', compact('users')); 
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',              // Name is required
            'email' => 'required|email|unique:users,email',   // Email must be valid and unique
            'password' => 'required|string|min:8',            // Password must be at least 8 characters
            'mobile' => 'nullable|numeric',                   // Mobile is optional and must be numeric
            'aadhar' => 'nullable|string|max:12',             // Aadhar is optional, max 12 characters
            'address' => 'nullable|string|max:255',           // Address is optional
            'state' => 'nullable|string|max:100',             // State is optional
            'pincode' => 'nullable|numeric',                  // Pincode is optional, must be numeric
            'photo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',        // Optional, max 2MB, JPEG/PNG
            'aadhar_photo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048', // Optional, max 2MB
            'pan_photo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',    // Optional, max 2MB
        ]);
    
        // Handle optional file uploads
        $photoPath = $request->file('photo') ? $request->file('photo')->store('photos') : null;
        $aadharPhotoPath = $request->file('aadhar_photo') ? $request->file('aadhar_photo')->store('aadhar_photos') : null;
        $panPhotoPath = $request->file('pan_photo') ? $request->file('pan_photo')->store('pan_photos') : null;
    
        // Create the user
        User::create([
            'name' => $request->name,                         // Required
            'email' => $request->email,                       // Required
            'password' => bcrypt($request->password),         // Hash the password           
            'role' => 'user',                                 // Set default role as 'user'
            'shop_name' => $request->input('shop_name', null),// Optional, defaults to null
            'aadhar' => $request->input('aadhar', null),      // Optional
            'mobile' => $request->input('mobile', null),      // Optional
            'address' => $request->input('address', null),    // Optional
            'state' => $request->input('state', null),        // Optional
            'pincode' => $request->input('pincode', null),    // Optional
            'status' => 'active',                             // Set status as active (default)
            'photo' => $photoPath,                            // Store photo path if uploaded
            'aadhar_photo' => $aadharPhotoPath,               // Store aadhar photo path if uploaded
            'pan_photo' => $panPhotoPath,                     // Store pan photo path if uploaded
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'User created successfully.');
    }
    
    
    // You can add more user-specific methods here
}
