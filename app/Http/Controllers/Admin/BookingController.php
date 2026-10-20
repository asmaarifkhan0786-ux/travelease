<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display all bookings.
     */
    public function index()
    {
        $bookings = Booking::latest()->get();

        return view('admin.bookings.index', compact('bookings'));
    }

    /**
     * Show create booking form.
     */
    public function create()
    {
        return view('admin.bookings.create');
    }

    /**
     * Store a new booking.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'package_name' => 'required|string|max:255',
            'travel_date' => 'nullable|date',
            'amount' => 'nullable|numeric|min:0',
        ]);

        Booking::create($validated);

        return redirect()
            ->route('admin.bookings.index')
            ->with('success', 'Booking created successfully.');
    }

    /**
     * Display a booking.
     */
    public function show(string $id)
    {
        $booking = Booking::findOrFail($id);

        return view('admin.bookings.show', compact('booking'));
    }

    /**
     * Show edit form.
     */
    public function edit(string $id)
    {
        $booking = Booking::findOrFail($id);

        return view('admin.bookings.edit', compact('booking'));
    }

    /**
     * Update a booking.
     */
    public function update(Request $request, string $id)
    {
        $booking = Booking::findOrFail($id);

        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'package_name' => 'required|string|max:255',
            'travel_date' => 'nullable|date',
            'amount' => 'nullable|numeric|min:0',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $booking->update($validated);

        return redirect()
            ->route('admin.bookings.index')
            ->with('success', 'Booking updated successfully.');
    }

    /**
     * Delete a booking.
     */
    public function destroy(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()
            ->route('admin.bookings.index')
            ->with('success', 'Booking deleted successfully.');
    }
}