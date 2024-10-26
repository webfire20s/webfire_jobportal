<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController1 extends Controller
{
    public function index(){
        return view('user/home'); 
    }
}
