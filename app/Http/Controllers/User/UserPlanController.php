<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan; // Import the Plan model
use App\Models\Transaction;
use Carbon\Carbon;
use App\Models\Page;

class UserPlanController extends Controller
{
    // Display available plans
    public function index()
    {
        // Get all available plans from the database
        $plans = Plan::all(); 
        $user = auth()->user(); // Get the logged-in user
        $transactions = Transaction::with('plan') // Eager load the 'plan' relationship
        ->where('user_id', $user->id)
        ->latest()
        ->get();
        $pages = Page::all();  // Retrieve all pages
        

        // Pass the plans to the view
        return view('user.plan.index', compact('plans','transactions','pages'));
    }

    // Handle purchasing a plan (you can implement this as per your requirements)
    public function purchase(Request $request, $planId)
    {
        $plan = Plan::findOrFail($planId);  // Fetch the plan details

        $user = auth()->user();  // Get the logged-in user

        // Generate a unique payment URL or QR code data for the plan (example: UPI link)
        $paymentLink = "upi://pay?pa=9955718214@ybl&pn=" . urlencode($plan->name) . "&mc=1234&tid=" . uniqid() . "&am=" . $plan->price;

        // Store the transaction with an "initiated" status
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->plan_id = $plan->id;
        $transaction->price = $plan->price;
        $transaction->month = $plan->duration;
        $transaction->purchase_date = Carbon::now();
        $transaction->receipt_url = 'receipt/url';  // Receipt URL will be added after the user uploads the receipt
        $transaction->save();
        $pages = Page::all();  // Retrieve all pages
        
        // Generate and pass the payment link (or QR code data) to the view
        return view('user.plan.purchase', compact('plan', 'transaction', 'paymentLink','pages'));
    }

    // Handle receipt upload after payment
    public function uploadReceipt(Request $request, $transactionId)
    {
        // Validate receipt upload
        $request->validate([
            'receipt' => 'required|file|mimes:jpeg,png,pdf|max:2048',  // Limit to valid image/PDF files
        ]);

        $transaction = Transaction::findOrFail($transactionId);  // Fetch the transaction

        // Store the receipt file
        $receiptPath = $request->file('receipt')->store('receipts', 'public');

        // Update the transaction status to "paid" and store the receipt URL
        $transaction->receipt_url = $receiptPath;
        $transaction->save();

        // Redirect to a confirmation page
        return redirect()->route('user.home')->with('success', 'Payment successfully verified, and plan activated.');
    }
}
