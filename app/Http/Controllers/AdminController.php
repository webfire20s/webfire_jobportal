<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Return the admin dashboard view
        return view('admin.dashboard');  // Ensure you have a view at resources/views/admin/dashboard.blade.php
    }

    // You can add more admin-specific methods here
}
