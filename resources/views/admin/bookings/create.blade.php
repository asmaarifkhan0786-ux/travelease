@extends('layouts.app')

@section('title', 'New Booking - TravelEase')
@section('breadcrumb', 'New Booking')
@section('header_title', 'Create Booking')

@section('content')
<style>
    .booking-form-page {
        color: #f8f9ff;
        max-width: 1000px;
        margin: 0 auto;
    }

    .booking-form-heading {
        margin-bottom: 25px;
    }

    .booking-form-heading h1 {
        font-size: 27px;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .booking-form-heading p {
        color: #9ba4bd;
        font-size: 13px;
        line-height: 1.7;
    }

    .booking-form-card {
        background: #111629;
        border: 1px solid #252c43;
        border-radius: 16px;
        padding: 28px;
    }

    .booking-section-title {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .booking-form-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
        margin-bottom: 25px;
    }

    .booking-field label {
        display: block;
        color: #c5cbe0;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 9px;
    }

    .booking-field input,
    .booking-field select,
    .booking-field textarea {
        width: 100%;
        box-sizing: border-box;
        padding: 12px 13px;
        border-radius: 9px;
        border: 1px solid #303751;
        background: #0b1020;
        color: #f8f9ff;
        font-size: 13px;
        outline: none;
    }

    .booking-field input:focus,
    .booking-field select:focus,
    .booking-field textarea:focus {
        border-color: #805cf7;
        box-shadow: 0 0 0 3px rgba(128,92,247,.12);
    }

    .booking-field textarea {
        min-height: 100px;
        resize: vertical;
    }

    .booking-form-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        padding-top: 22px;
        border-top: 1px solid #252c43;
    }

    .booking-submit {
        border: none;
        border-radius: 9px;
        padding: 12px 18px;
        background: linear-gradient(135deg, #805cf7, #5144d8);
        color: white;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
    }

    .booking-cancel {
        border: 1px solid #303751;
        border-radius: 9px;
        padding: 12px 18px;
        color: #c5cbe0;
        text-decoration: none;
        font-size: 13px;
    }

    .booking-message {
        padding: 13px 15px;
        margin-bottom: 20px;
        border-radius: 9px;
        font-size: 13px;
    }

    .booking-error {
        color: #fda4af;
        background: rgba(243,35,54,.1);
        border: 1px solid rgba(243,35,54,.25);
    }

    @media(max-width: 650px) {
        .booking-form-grid {
            grid-template-columns: 1fr;
        }

        .booking-form-card {
            padding: 18px;
        }
    }
</style>

<div class="booking-form-page">
    <div class="booking-form-heading">
        <h1>Create a Booking</h1>
        <p>Enter the traveller's information and trip details below.</p>
    </div>

    @if ($errors->any())
        <div class="booking-message booking-error">
            <strong>Please correct the following:</strong>
            <ul style="margin:10px 0 0 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="booking-message"
             style="color:#4ade80;background:rgba(34,197,94,.1);">
            {{ session('success') }}
        </div>
    @endif

    <div class="booking-form-card">
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf

            <h2 class="booking-section-title">
                <i class="fa-regular fa-user" style="color:#a995ff;margin-right:8px;"></i>
                Customer Information
            </h2>

            <div class="booking-form-grid">
                <div class="booking-field">
                    <label for="customer_name">Customer Name *</label>
                    <input
                        type="text"
                        id="customer_name"
                        name="customer_name"
                        value="{{ old('customer_name', old('name')) }}"
                        placeholder="Enter full name"
                        required
                    >
                </div>

                <div class="booking-field">
                    <label for="email">Email Address *</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="customer@example.com"
                        required
                    >
                </div>

                <div class="booking-field">
                    <label for="phone">Phone Number</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        value="{{ old('phone') }}"
                        placeholder="03XX XXXXXXX"
                    >
                </div>

                <div class="booking-field">
                    <label for="travellers">Number of Travellers</label>
                    <input
                        type="number"
                        id="travellers"
                        name="travellers"
                        value="{{ old('travellers', 1) }}"
                        min="1"
                        max="100"
                    >
                </div>
            </div>

            <h2 class="booking-section-title">
                <i class="fa-solid fa-plane-departure" style="color:#a995ff;margin-right:8px;"></i>
                Trip Details
            </h2>

            <div class="booking-form-grid">
                <div class="booking-field">
                    <label for="package_name">Package / Destination *</label>
                    <input
                        type="text"
                        id="package_name"
                        name="package_name"
                        value="{{ old('package_name') }}"
                        placeholder="e.g. Hunza Valley Tour"
                        required
                    >
                </div>

                <div class="booking-field">
                    <label for="travel_date">Travel Date</label>
                    <input
                        type="date"
                        id="travel_date"
                        name="travel_date"
                        value="{{ old('travel_date') }}"
                        min="{{ date('Y-m-d') }}"
                    >
                </div>

                <div class="booking-field">
                    <label for="amount">Total Amount</label>
                    <input
                        type="number"
                        id="amount"
                        name="amount"
                        value="{{ old('amount') }}"
                        placeholder="Enter amount"
                        min="0"
                        step="0.01"
                    >
                </div>

                <div class="booking-field">
                    <label for="status">Booking Status</label>
                    <select id="status" name="status">
                        <option value="pending" @selected(old('status', 'pending') === 'pending')>Pending</option>
                        <option value="confirmed" @selected(old('status') === 'confirmed')>Confirmed</option>
                        <option value="cancelled" @selected(old('status') === 'cancelled')>Cancelled</option>
                    </select>
                </div>

                <div class="booking-field" style="grid-column:1/-1;">
                    <label for="notes">Additional Notes</label>
                    <textarea
                        id="notes"
                        name="notes"
                        placeholder="Any special requirements or travel notes..."
                    >{{ old('notes') }}</textarea>
                </div>
            </div>

            <div class="booking-form-actions">
                <button type="submit" class="booking-submit">
                    <i class="fa-solid fa-check" style="margin-right:7px;"></i>
                    Save Booking
                </button>

                <a href="{{ url('/admin/bookings') }}" class="booking-cancel">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection