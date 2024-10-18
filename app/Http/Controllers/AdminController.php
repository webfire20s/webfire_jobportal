<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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


   
    // You can add more admin-specific methods here
}
