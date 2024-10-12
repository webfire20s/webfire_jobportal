<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Return the user dashboard view
        return view('user.dashboard');  // Ensure you have a view at resources/views/user/dashboard.blade.php
    }

    // You can add more user-specific methods here
}
