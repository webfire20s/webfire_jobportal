<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        $awards = Award::orderBy('sort_order', 'ASC')->get();
        return view('admin.awards.index', compact('awards'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $fileName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads/awards'), $fileName);

        Award::create([
            'title' => $request->title,
            'image' => $fileName,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return back()->with('success','Award added successfully');
    }

    public function update(Request $request, $id)
    {
        $award = Award::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if($request->hasFile('image')){
            $fileName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/awards'), $fileName);
            $award->image = $fileName;
        }

        $award->title = $request->title;
        $award->sort_order = $request->sort_order ?? 0;

        $award->save();

        return back()->with('success','Award updated successfully');
    }

    public function destroy($id)
    {
        $award = Award::findOrFail($id);
        $award->delete();

        return back()->with('success','Award deleted successfully');
    }
}
