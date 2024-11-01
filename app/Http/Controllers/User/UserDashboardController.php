<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poster;

class UserDashboardController extends Controller
{
    public function index(){

        $posters = Poster::all();

        return view('user/home',compact('posters')); 
    }
}
