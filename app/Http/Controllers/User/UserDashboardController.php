<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poster;
use App\Models\PostersCategory; // Note the plural form in the class name

class UserDashboardController extends Controller
{
    public function index(Request $request)
    {
        // Fetch active categories
        $categories = PostersCategory::where('status', 1)->get();
    
        // Get posters based on the selected category, default to the first category if none selected
        $categoryId = $request->input('category_id', $categories->first()->id ?? null);
        $posters = Poster::where('category_id', $categoryId)->get();
    
        return view('user.home', compact('categories', 'posters'));
    }
    


    // public function home(Request $request)
    // {
    //     // Fetch all categories
    //     $categories = PosterCategory::where('status', 1)->get(); // Assuming 'status' indicates if the category is active

    //     // Get posters based on the selected category, default to the first category if none selected
    //     $categoryId = $request->input('category_id', $categories->first()->id ?? null);
    //     $posters = Poster::where('category_id', $categoryId)->get();

    //     return view('user.home', compact('categories', 'posters'));
    // }


    public function show($id)
    {
        $poster = Poster::findOrFail($id);
        return view('user.poster_detail', compact('poster'));
    }
}
