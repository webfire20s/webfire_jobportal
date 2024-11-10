<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poster;
use App\Models\PostersCategory; 

class UserDashboardController extends Controller
{
    public function index(Request $request)
    {
      
        $categories = PostersCategory::where('status', 1)->get();
    
        
        $categoryId = $request->input('category_id', $categories->first()->id ?? null);
        $posters = Poster::where('category_id', $categoryId)->get();
    
        return view('user.home', compact('categories', 'posters'));
    }
    
    public function show($id)
    {
        $categories = PostersCategory::where('status', 1)->get();
        $poster = Poster::findOrFail($id);
        return view('user.poster_detail', compact('poster','categories'));
    }
    public function setting(){

    }
    public function profile(){

    }
    
}
