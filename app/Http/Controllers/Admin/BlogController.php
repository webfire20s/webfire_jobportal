<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all blog posts, newest first
        $posts = BlogPost::orderBy('created_at', 'desc')->get();
        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Max 2MB
            'is_published' => 'sometimes|boolean',
        ]);

        // 1. Handle Image Upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/blog_images');
        }

        // 2. Generate Unique Slug
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $count = 1;
        while (BlogPost::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        // 3. Set Published State and Date
        $isPublished = $request->has('is_published');
        $publishedAt = $isPublished ? now() : null;

        BlogPost::create([
            'title' => $validatedData['title'],
            'slug' => $slug,
            'content' => $validatedData['content'],
            'author_name' => $validatedData['author_name'] ?? 'Admin',
            'image_path' => $imagePath,
            'is_published' => $isPublished,
            'published_at' => $publishedAt,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blog)
    {
        return view('admin.blog.edit', ['post' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_published' => 'sometimes|boolean',
        ]);

        // 1. Handle Image Upload (and deletion of old one)
        $imagePath = $blog->image_path;
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($blog->image_path) {
                Storage::delete($blog->image_path);
            }
            $imagePath = $request->file('image')->store('public/blog_images');
        }

        // 2. Handle Slug Change (only if title changed)
        $slug = $blog->slug;
        if ($blog->title !== $validatedData['title']) {
            $slug = Str::slug($validatedData['title']);
            $originalSlug = $slug;
            $count = 1;
            while (BlogPost::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }
        }

        // 3. Set Published State and Date
        $isPublished = $request->has('is_published');
        // Only update published_at if it's being published now and wasn't before
        if ($isPublished && !$blog->is_published) {
            $publishedAt = now();
        } elseif (!$isPublished) {
            $publishedAt = null;
        } else {
            $publishedAt = $blog->published_at; // Keep existing publish date if already published
        }


        $blog->update([
            'title' => $validatedData['title'],
            'slug' => $slug,
            'content' => $validatedData['content'],
            'author_name' => $validatedData['author_name'] ?? 'Admin',
            'image_path' => $imagePath,
            'is_published' => $isPublished,
            'published_at' => $publishedAt,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blog)
    {
        // Delete the associated image file
        if ($blog->image_path) {
            Storage::delete($blog->image_path);
        }

        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted successfully!');
    }
}
