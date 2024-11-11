<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ImportantNotice;
use Illuminate\Support\Facades\Log;

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


    public function changePassword(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|confirmed',
        ]);

        $user = Auth::user();

        // Log the attempt to change the password
        Log::info('Password change attempt', ['user_id' => $user->id, 'email' => $user->email]);

        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            Log::warning('Incorrect current password', ['user_id' => $user->id, 'email' => $user->email]);
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        // Log successful password validation
        Log::info('Current password validated successfully', ['user_id' => $user->id, 'email' => $user->email]);

        // Check if the new password is actually different from the current one
        if (Hash::check($request->new_password, $user->password)) {
            Log::warning('New password is the same as current password', ['user_id' => $user->id, 'email' => $user->email]);
            return redirect()->back()->withErrors(['new_password' => 'New password cannot be the same as the current password']);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);

        // Log the password hash before update
        Log::info('Password hash before update', ['new_password' => $request->new_password]);

        $user->save();

        // Log the password update
        Log::info('Password updated successfully', ['user_id' => $user->id, 'email' => $user->email]);

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
