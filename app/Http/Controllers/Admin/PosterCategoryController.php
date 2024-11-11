<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostersCategory;
use Illuminate\Http\Request;

class PosterCategoryController extends Controller
{
    // Display a listing of the poster categories
    public function index()
    {
        $categories = PostersCategory::all();
        return view('admin.category.index', compact('categories'));
    }

    // Show the form for creating a new poster category
    public function create()
    {
        return view('admin.category.add');
    }

    // Show the form to add a new category
    public function add()
    {
        return view('admin.category.add');
    }

    // Store a newly created poster category
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:1,0',
        ]);

        // Create the category
        PostersCategory::create($request->all());

        // Redirect back to the index page
        return redirect()->route('admin.category.index')->with('success', 'Category created successfully!');
    }

    // Display the specified poster category
    public function show($id)
    {
        $category = PostersCategory::findOrFail($id);
        return view('admin.category.show', compact('category'));
    }

    // Show the form for editing the specified poster category
    public function edit($id)
    {
        $category = PostersCategory::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    // Update the specified poster category in the database
    public function update(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:1,0',
        ]);

        $category = PostersCategory::findOrFail($id);
        $category->update($request->all());

        // Redirect back to the index page
        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully!');
    }

    // Remove the specified poster category from the database
    public function destroy($id)
    {
        $category = PostersCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully!');
    }
}
