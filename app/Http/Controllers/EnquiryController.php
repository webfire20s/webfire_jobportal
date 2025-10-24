<?php

namespace App\Http\Controllers;

use App\Models\ServiceEnquiry;
use Illuminate\Http\Request;
use App\Models\Page;

class EnquiryController extends Controller
{
    /**
     * Show the dedicated service enquiry form page.
     */
    public function create()
    {
        $pages = Page::all();  // Retrieve all pages
        // This array could be pulled from a service repository or configuration if needed, 
        // but for now, we'll just show the page.
        return view('enquiry.create', compact('pages'));
    }

    /**
     * Stores a new service enquiry submitted via the public form.
     */
    public function storeServiceEnquiry(Request $request)
    {
        // 1. Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20', // Made phone required for dedicated page
            'inquired_service' => 'required|string|max:255', // The service name selected by the user
            'message' => 'nullable|string',
        ]);

        // 2. Create the new enquiry record
        ServiceEnquiry::create($validated);

        // 3. Redirect the user back to the form with a success message
        return redirect()->route('enquiry.create')->with('success', 'Your enquiry about ' . $validated['inquired_service'] . ' has been sent successfully. We will contact you shortly!');
    }
}
