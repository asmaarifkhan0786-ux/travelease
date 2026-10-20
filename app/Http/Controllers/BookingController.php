<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Show Booking Form
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('bookings.create');
    }


    /*
    |--------------------------------------------------------------------------
    | Store Booking
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'destination' => ['required', 'string', 'max:150'],
            'travel_date' => ['required', 'date'],
            'persons' => ['required', 'integer', 'min:1'],
        ]);


        /*
        |--------------------------------------------------------------------------
        | Temporary Booking Storage
        |--------------------------------------------------------------------------
        |
        | For now booking information is stored in session.
        | Later this can be connected with the bookings database table.
        |
        */

        session([
            'travel_booking' => $validated
        ]);


        /*
        |--------------------------------------------------------------------------
        | IMPORTANT
        |--------------------------------------------------------------------------
        |
        | Customer goes to PAYMENT.
        | Customer does NOT go to dashboard.
        |
        */

        return redirect()
            ->route('payment.create')
            ->with(
                'success',
                'Your booking has been submitted successfully. Please complete your payment.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | Payment Page
    |--------------------------------------------------------------------------
    */

    public function payment()
    {
        $booking = session('travel_booking');


        // If there is no booking, send customer back to booking form
        if (!$booking) {
            return redirect()
                ->route('bookings.create')
                ->with('error', 'Please complete the booking form first.');
        }


        return view('payment.create', compact('booking'));
    }


    /*
    |--------------------------------------------------------------------------
    | Process Payment
    |--------------------------------------------------------------------------
    */

    public function processPayment(Request $request)
    {
        $request->validate([
            'payment_method' => ['required', 'string'],
        ]);


        $booking = session('travel_booking');


        if (!$booking) {
            return redirect()
                ->route('bookings.create')
                ->with('error', 'Booking information was not found.');
        }


        /*
        |--------------------------------------------------------------------------
        | Payment Information
        |--------------------------------------------------------------------------
        */

        session([
            'travel_payment' => [
                'payment_method' => $request->payment_method,
                'payment_status' => 'Paid',
            ]
        ]);


        /*
        |--------------------------------------------------------------------------
        | Customer goes to confirmation
        |--------------------------------------------------------------------------
        |
        | NOT ADMIN DASHBOARD
        |
        */

        return redirect()
            ->route('payment.success');
    }


    /*
    |--------------------------------------------------------------------------
    | Payment Success
    |--------------------------------------------------------------------------
    */

    public function paymentSuccess()
    {
        $booking = session('travel_booking');

        $payment = session('travel_payment');


        if (!$booking || !$payment) {
            return redirect()
                ->route('bookings.create')
                ->with('error', 'No completed booking was found.');
        }


        return view(
            'payment.success',
            compact('booking', 'payment')
        );
    }
}