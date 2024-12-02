<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poster;
use App\Models\PostersCategory;
use App\Models\Page;
use App\Models\ImportantNotice;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\LatestNews;
use App\Models\Form;

class UserDashboardController extends Controller
{
    public function form_list()
    {
        $pages = Page::all();  // Retrieve all pages
        $forms = Form::orderBy('id','desc')->get();
        return view('user.form_list',compact('pages','forms'));  // Create a view for password change
    }
    public function index(Request $request)
    {

        $latestNews = LatestNews::latest()->get();
        $categories = PostersCategory::where('status', 1)->get();
        $pages = Page::all();  // Retrieve all pages
        $notice = ImportantNotice::first(); // Assuming there is only one notice
        $categoryId = $request->input('category_id', $categories->first()->id ?? null);
        $posters = Poster::where('category_id', $categoryId)->get();

        return view('user.home', compact('categories', 'posters', 'pages', 'notice','latestNews'));
    }

    public function show($id)
    {
        $latestNews = LatestNews::latest()->get();
        $categories = PostersCategory::where('status', 1)->get();
        $poster = Poster::findOrFail($id);
        $pages = Page::all();  // Retrieve all pages

        return view('user.poster_detail', compact('poster', 'categories', 'pages','latestNews'));
    }
    public function profile()
    {
        $pages = Page::all();  // Retrieve all pages

        return view('user.profile',compact('pages'));  // Create a view for password change
    }
    

    public function updateProfile(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'mobile' => 'nullable|string|max:15|unique:users,mobile,' . Auth::id(),
            'address' => 'nullable|string|max:255',
            'shop_name' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'pincode' => 'nullable|string|max:10',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'aadhar_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'pan_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Get the logged-in user
        $user = Auth::user();

        // Update user's data
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->address = $request->input('address');
        $user->shop_name = $request->input('shop_name');
        $user->state = $request->input('state');
        $user->pincode = $request->input('pincode');

        // Handle photo uploads
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($user->photo && Storage::exists('public/photos/' . $user->photo)) {
                Storage::delete('public/photos/' . $user->photo);
            }
            // Save new photo
            $user->photo = $request->file('photo')->store('public/photos');
        }

        // Handle aadhar photo upload
        if ($request->hasFile('aadhar_photo')) {
            // Delete old Aadhar photo if it exists
            if ($user->aadhar_photo && Storage::exists('public/aadhar/' . $user->aadhar_photo)) {
                Storage::delete('public/aadhar/' . $user->aadhar_photo);
            }
            // Save new Aadhar photo
            $user->aadhar_photo = $request->file('aadhar_photo')->store('public/aadhar');
        }

        // Handle PAN photo upload
        if ($request->hasFile('pan_photo')) {
            // Delete old PAN photo if it exists
            if ($user->pan_photo && Storage::exists('public/pan/' . $user->pan_photo)) {
                Storage::delete('public/pan/' . $user->pan_photo);
            }
            // Save new PAN photo
            $user->pan_photo = $request->file('pan_photo')->store('public/pan');
        }

        // Save the updated user data
        $user->save();

        // Redirect back with a success message
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully!');
    }


    public function changePassword()
    {
        $pages = Page::all();  // Retrieve all pages

        return view('user.change_password',compact('pages'));  // Create a view for password change
    }

    public function updatePassword(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed', // new password and confirmation should match
        ]);

        // Check if the current password is correct
        $user = Auth::user();
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        // Redirect back with a success message
        return redirect()->route('user.profile')->with('success', 'Password changed successfully!');
    }

    public function latest_news_details($id)
    {
        $news = LatestNews::findOrFail($id);  // Retrieve the news by its ID
        $pages = Page::all();  // Retrieve all pages
        return view('latest_news.show', compact('news','pages'));  // Return the view with the news data
    }



}
