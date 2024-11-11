<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LatestNews;
use Illuminate\Http\Request;

class LatestNewController extends Controller
{
    // Display a listing of the latest news
    public function index()
    {
        // Paginate the latest news, showing 6 items per page (you can adjust the number as needed)
        $latestNews = LatestNews::latest()->paginate(6);
        return view('admin.latest_news.index', compact('latestNews'));
    }

    // Show the form for creating new latest news
    public function create()
    {
        return view('admin.latest_news.create');
    }

    // Store a newly created latest news in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $latestNews = new LatestNews();
        $latestNews->title = $request->title;
        $latestNews->content = $request->content;

        if ($request->hasFile('banner_image')) {
            $imagePath = $request->file('banner_image')->store('public/latest_news');
            $latestNews->banner_image = basename($imagePath);
        }

        $latestNews->save();

        return redirect()->route('admin.latest_news.index')->with('success', 'Latest News created successfully.');
    }

    // Show the form for editing an existing latest news
    public function edit($id)
    {
        $news = LatestNews::findOrFail($id);
        return view('admin.latest_news.edit', compact('news'));
    }

    // Update an existing latest news in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $latestNews = LatestNews::findOrFail($id);
        $latestNews->title = $request->title;
        $latestNews->content = $request->content;

        if ($request->hasFile('banner_image')) {
            // Delete the old image if exists
            if ($latestNews->banner_image) {
                unlink(storage_path('app/public/latest_news/' . $latestNews->banner_image));
            }

            $imagePath = $request->file('banner_image')->store('public/latest_news');
            $latestNews->banner_image = basename($imagePath);
        }

        $latestNews->save();

        return redirect()->route('admin.latest_news.index')->with('success', 'Latest News updated successfully.');
    }

    // Delete an existing latest news from the database
    public function destroy($id)
    {
        $latestNews = LatestNews::findOrFail($id);

        // Delete the image file if exists
        if ($latestNews->banner_image) {
            unlink(storage_path('app/public/latest_news/' . $latestNews->banner_image));
        }

        $latestNews->delete();

        return redirect()->route('admin.latest_news.index')->with('success', 'Latest News deleted successfully.');
    }
}
