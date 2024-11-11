<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ImportantNotice;

class SettingsController extends Controller
{
    // Show the admin settings page
    public function index()
    {
        return view('admin.settings.index');  // Make sure to create this view
    }

    // Update admin details
    public function update(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'mobile' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        // Update the logged-in admin user
        $user = Auth::user();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->mobile = $request->input('mobile');
        $user->address = $request->input('address');
        $user->save();

        // Redirect back with success message
        return redirect()->route('admin.settings')->with('success', 'Details updated successfully!');
    }

    // Change admin password
    public function changePassword(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|confirmed',
        ]);

        $user = Auth::user();

        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect back with success message
        return redirect()->route('admin.settings')->with('success', 'Password updated successfully!');
    }

    // Show important notices for users
    public function showNotices()
    {
        $notices = ImportantNotice::all();  // Fetch all notices from the database
        return view('admin.settings.notices', compact('notices'));
    }

    // Update an important notice
    public function updateNotice(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'notice' => 'required|string|max:1000',
        ]);

        // Save or update the notice
        $notice = ImportantNotice::first(); // Assuming there is only one notice
        if ($notice) {
            $notice->notice = $request->input('notice');
            $notice->save();
        } else {
            // Create a new notice if none exists
            ImportantNotice::create([
                'notice' => $request->input('notice'),
            ]);
        }

        // Redirect back with success message
        return redirect()->route('admin.settings.notices')->with('success', 'Notice updated successfully!');
    }
}
