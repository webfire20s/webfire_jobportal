<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        // Fetch all pages
        $pages = Page::all();
        return view('admin.page.index', compact('pages'));
    }

    public function create()
    {
        // Show the page creation form
        return view('admin.page.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_tags' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('feature_image')) {
            $imagePath = $request->file('feature_image')->store('images/pages', 'public');
        }

        // Store the page data
        Page::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'feature_image' => $imagePath,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_tags' => $request->meta_tags,
            'content' => $request->content,
        ]);

        return redirect()->route('pages.index')->with('success', 'Page created successfully');
    }

    public function edit(Page $page)
    {
        // Show the page edit form
        return view('admin.page.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_tags' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('feature_image')) {
            // Delete old image if it exists
            if ($page->feature_image) {
                Storage::delete('public/' . $page->feature_image);
            }
            $imagePath = $request->file('feature_image')->store('images/pages', 'public');
            $page->feature_image = $imagePath;
        }

        // Update page data
        $page->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_tags' => ($request->meta_tags),
            'content' => $request->content,
        ]);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }

    public function destroy(Page $page)
    {
        // Delete the page's feature image
        if ($page->feature_image) {
            Storage::delete('public/' . $page->feature_image);
        }

        // Delete the page record
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully');
    }
}
