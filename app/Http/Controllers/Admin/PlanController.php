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
        return view('plans.index', compact('plans'));
    }

    // Handle plan selection and receipt upload
    public function store(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'receipt' => 'required|file|mimes:jpeg,png,pdf',
        ]);

        $receiptPath = $request->file('receipt')->store('receipts');

        Transaction::create([
            'user_id' => auth()->id(),
            'plan_id' => $request->plan_id,
            'receipt_url' => $receiptPath,
            'approved' => false,  // Awaiting admin approval
        ]);

        return redirect()->back()->with('success', 'Payment receipt uploaded. Waiting for admin approval.');
    }
}
