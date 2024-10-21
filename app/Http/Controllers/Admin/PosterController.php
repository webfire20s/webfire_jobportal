<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Poster;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    // Admin: Show all posters for management
    public function index()
    {
        $posters = Poster::all();
        return view('admin.poster.index', compact('posters'));
    }

    public function add()
    {
        return view('admin.poster.add');
    }
    // Admin: Store a new poster
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'poster' => 'required|image|mimes:jpeg,png',
        ]);

        $posterPath = $request->file('poster')->store('posters');

        Poster::create([
            'title' => $request->title,
            'description' => $request->description,
            'poster_url' => $posterPath,
        ]);

        return redirect()->back()->with('success', 'Poster added successfully.');
    }

    // Customer: Show all posters (if approved)
    public function showCustomerPosters()
    {
        // Check if user has an approved transaction
        $transaction = Transaction::where('user_id', auth()->id())
                                   ->where('approved', true)
                                   ->first();

        if (!$transaction) {
            return redirect()->back()->with('error', 'You don’t have access yet. Please wait for approval.');
        }

        $posters = Poster::all();
        return view('poster.customer_index', compact('posters'));
    }
}
