<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\Models\Plan;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    // Show all available plans
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plan.index', compact('plans'));
    }


    public function add()
    {
        return view('admin.plan.add');
    }


    public function destroy($id)
    {
        // Find the plan by ID
        $plan = Plan::findOrFail($id);

        // Delete the plan
        $plan->delete();

        // Redirect back with success message
        return redirect()->route('plan/')->with('success', 'Plan deleted successfully!');
    }




    // Handle plan selection and receipt upload
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',    // Validate name as required, string, and max length of 255 characters
            'price' => 'required|numeric',          // Ensure price is required and numeric
            'duration' => 'required|numeric',          // Ensure price is required and numeric
            'description' => 'required|string|max:1000', // Ensure description is required, string, and max 1000 characters
        ]);
    
        // Create a new plan record
        Plan::create([
            'name' => $request->name,               // Store the plan name
            'price' => $request->price,             // Store the plan price
            'duration' => $request->duration,             // Duration the plan
            'description' => $request->description, // Store the plan description
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Plan created successfully.');
    }
    
}
