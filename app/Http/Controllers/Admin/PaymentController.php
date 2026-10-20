<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('admin.payments.index');
    }

    public function create()
    {
        return view('admin.payments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'booking_id' => ['required', 'string', 'max:100'],
            'amount' => ['required', 'numeric', 'min:0'],
            'payment_method' => ['required', 'string', 'max:100'],
            'status' => ['required', 'in:pending,paid,failed'],
        ]);

        // Payment database mein save karne ke liye
        // Payment model aur migration bhi zaroori hain.
        return back()->with(
            'success',
            'Payment details validated successfully.'
        );
    }

    public function show(string $id)
    {
        abort(404, 'Payment record not found.');
    }

    public function edit(string $id)
    {
        abort(404, 'Payment record not found.');
    }

    public function update(Request $request, string $id)
    {
        abort(404, 'Payment record not found.');
    }

    public function destroy(string $id)
    {
        abort(404, 'Payment record not found.');
    }
}