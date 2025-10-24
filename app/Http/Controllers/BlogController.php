<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Models\Page;

class BlogController extends Controller
{
    /**
     * Display a listing of published blog posts.
     */
    public function index()
    {
        // Fetch only published posts, ordered by the latest published_at date, and paginate them.
        $posts = BlogPost::where('is_published', true)
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(9); // Show 9 posts per page
        $pages = Page::all();  // Retrieve all pages

        return view('blog.index', compact('posts', 'pages'));
    }

    /**
     * Display the specified published blog post.
     * Uses Route Model Binding to find the post by its 'slug'.
     */
    public function show(BlogPost $blog)
    {
        // Ensure the post is published before displaying it
        if (!$blog->is_published) {
            abort(404);
        }
        $pages = Page::all();  // Retrieve all pages

        return view('blog.show', compact('blog', 'pages'));
    }
}
