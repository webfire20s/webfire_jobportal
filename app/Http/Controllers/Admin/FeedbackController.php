<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    // --- Display a listing of the resource (Index) ---
    public function index()
    {
        $feedbacks = Feedback::latest()->paginate(10);
        return view('admin.feedback.index', compact('feedbacks'));
    }

    // --- Show the form for creating a new resource (Create) ---
    public function create()
    {
        return view('admin.feedback.create');
    }

    // --- Store a newly created resource in storage (Store) ---
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'office_address' => 'required|string|max:255',
            'feedback' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB
        ]);

        $data = $request->only(['name', 'office_address', 'feedback']);
        $data['is_published'] = $request->has('is_published');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/feedback_photos');
            $data['photo'] = Storage::url($path); // Store public URL
        }

        Feedback::create($data);

        return redirect()->route('feedbacks.index')->with('success', 'Feedback added successfully.');
    }

    // --- Show the form for editing the specified resource (Edit) ---
    public function edit(Feedback $feedback)
    {
        return view('admin.feedback.edit', compact('feedback'));
    }

    // --- Update the specified resource in storage (Update) ---
    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'office_address' => 'required|string|max:255',
            'feedback' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['name', 'office_address', 'feedback']);
        $data['is_published'] = $request->has('is_published');

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($feedback->photo) {
                Storage::delete(str_replace('/storage', 'public', $feedback->photo));
            }
            $path = $request->file('photo')->store('public/feedback_photos');
            $data['photo'] = Storage::url($path);
        }

        $feedback->update($data);

        return redirect()->route('feedbacks.index')->with('success', 'Feedback updated successfully.');
    }

    // --- Remove the specified resource from storage (Destroy) ---
    public function destroy(Feedback $feedback)
    {
        if ($feedback->photo) {
            Storage::delete(str_replace('/storage', 'public', $feedback->photo));
        }
        $feedback->delete();

        return redirect()->route('feedbacks.index')->with('success', 'Feedback deleted successfully.');
    }
}