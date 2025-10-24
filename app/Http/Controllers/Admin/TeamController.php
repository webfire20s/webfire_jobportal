<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource (READ).
     */
    public function index()
    {
        $members = TeamMember::orderBy('created_at', 'desc')->get();
        return view('admin.teams.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource (CREATE).
     */
    public function create()
    {
        $member = new TeamMember();
        return view('admin.teams.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'designation' => 'required|max:100',
            'description' => 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            // Store the photo in 'public/team_photos' and return the relative path
            $photoPath = $request->file('photo')->store('team_photos', 'public');
        }

        TeamMember::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'photo_path' => $photoPath,
        ]);

        return redirect()->route('admin.teams.index')->with('success', 'Team member added successfully.');
    }

    /**
     * Show the form for editing the specified resource (UPDATE).
     */
    public function edit(TeamMember $team)
    {
        // $team is automatically injected by route model binding
        return view('admin.teams.edit', ['member' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMember $team)
    {
        $request->validate([
            'name' => 'required|max:100',
            'designation' => 'required|max:100',
            'description' => 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = $team->photo_path;

        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($photoPath) {
                Storage::disk('public')->delete($photoPath);
            }
            // Store new photo
            $photoPath = $request->file('photo')->store('team_photos', 'public');
        }

        $team->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'photo_path' => $photoPath,
        ]);

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage (DELETE).
     */
    public function destroy(TeamMember $team)
    {
        // Delete the associated photo file if it exists
        if ($team->photo_path) {
            Storage::disk('public')->delete($team->photo_path);
        }

        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted successfully.');
    }
}
