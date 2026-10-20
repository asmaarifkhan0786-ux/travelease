<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripEnquiryController extends Controller
{
    public function create()
    {
        return view('packages.plan-trip');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:25',
            'destination' => 'required|string|max:150',
            'travel_date' => 'required|date|after_or_equal:today',
            'travelers' => 'required|integer|min:1|max:50',
            'budget' => 'nullable|string|max:50',
            'message' => 'nullable|string|max:1000',
        ]);

        // Filhal enquiry validate hogi.
        // Database mein save karna next step mein add kar sakte hain.

        return redirect()
            ->route('trip.plan')
            ->with('success', 'Your travel enquiry has been submitted successfully.');
    }
}