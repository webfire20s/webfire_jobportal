<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceEnquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of all Service Enquiries.
     */
    public function index()
    {
        // Fetch all enquiries, ordered by creation date (newest first), with pagination
        $enquiries = ServiceEnquiry::orderBy('created_at', 'desc')->paginate(15);
        
        return view('admin.enquiries.index', compact('enquiries'));
    }

    /**
     * Display the specified Service Enquiry, allowing admin to view details and change status.
     */
    public function show(ServiceEnquiry $enquiry)
    {
        $statuses = [
            'New' => 'New Enquiry',
            'Contacted' => 'Contacted',
            'In Progress' => 'Deal in Progress',
            'Closed' => 'Closed / Complete',
            'Spam' => 'Spam / Invalid'
        ];
        
        return view('admin.enquiries.show', compact('enquiry', 'statuses'));
    }

    /**
     * Update the status of the specified Service Enquiry.
     */
    public function update(Request $request, ServiceEnquiry $enquiry)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:New,Contacted,In Progress,Closed,Spam',
        ]);

        $enquiry->update($validated);

        return redirect()->route('admin.enquiries.show', $enquiry)
                         ->with('success', 'Enquiry status updated to ' . $enquiry->status . '.');
    }

    /**
     * Remove the specified Service Enquiry from storage.
     * (Optional, but useful for cleaning up spam/old data)
     */
    public function destroy(ServiceEnquiry $enquiry)
    {
        $enquiry->delete();

        return redirect()->route('admin.enquiries.index')
                         ->with('success', 'Enquiry from ' . $enquiry->name . ' has been permanently deleted.');
    }
}
