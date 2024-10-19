<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Admin: View all transactions
    public function index()
    {
        $transactions = Transaction::with('user', 'plan')->get();
        return view('admin.transaction.index', compact('transactions'));
    }

    // Admin: Approve a customer’s transaction
    public function approve(Transaction $transaction)
    {
        $transaction->approved = true;
        $transaction->save();

        return redirect()->back()->with('success', 'Plan approved successfully.');
    }
}
