<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $services = Service::orderBy('id', 'desc')->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'filter_class' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'nullable|string|max:255', // Assuming image is saved as a path/URL
            'alt' => 'nullable|string|max:255',
            'url' => 'required|string|max:255',
            'style' => 'nullable|string|max:255',
        ]);

        Service::create($validated);

        Session::flash('success', 'Service created successfully!');
        return redirect()->route('admin.services.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service): View
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate([
            'filter_class' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'alt' => 'nullable|string|max:255',
            'url' => 'required|string|max:255',
            'style' => 'nullable|string|max:255',
        ]);

        $service->update($validated);

        Session::flash('success', 'Service updated successfully!');
        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service): RedirectResponse
    {
        $service->delete();

        Session::flash('success', 'Service deleted successfully!');
        return redirect()->route('admin.services.index');
    }
}
