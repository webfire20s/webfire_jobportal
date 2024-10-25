<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Poster;
use App\Models\PostersCategory;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Add this import at the top
use Exception;

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
        $categories = PostersCategory::all();
        return view('admin.poster.add',compact('categories'));
    }


    public function destroy($id)
    {
        // Find the plan by ID
        $plan = Poster::findOrFail($id);

        // Delete the plan
        $plan->delete();

        // Redirect back with success message
        return redirect()->route('admin.poster')->with('success', 'Poster deleted successfully!');
    }


    public function store(Request $request)
{
    // Log the incoming request data
    Log::info('Post Data: ', $request->all());

    // Validation - keep this outside of the try-catch block
    $validator = \Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'image' => 'required|image|mimes:jpeg,png|max:2048', // Limit the file size to 2MB
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        Log::warning('Validation failed: ', $validator->errors()->toArray());
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        // Store the poster image - change 'poster' to 'image'
        $posterPath = $request->file('image')->store('posters', 'public'); // Stores in 'storage/app/public/posters'
        $pdfPath = $request->file('pdf')->store('posters', 'public'); // Stores in 'storage/app/public/posters'

        // Log the path where the poster was stored
        Log::info('Poster stored at: ' . $posterPath);

        // Create a new poster record
        $poster = Poster::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $posterPath, // Save the file path
            'pdf' => $pdfPath, // Save the file path
            'poster_url' => $request->input('poster_url'),
            'category_id' => $request->input('category_id')
        ]);

        // Log the newly created poster ID
        Log::info('Poster created with ID: ' . $poster->id);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Poster added successfully.');

    } catch (Exception $e) {
        // Log the error for debugging
        Log::error('Error adding poster: ' . $e->getMessage());

        // Redirect back with an error message
        return redirect()->back()->with('error', 'There was a problem adding the poster. Please try again.');
    }
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
