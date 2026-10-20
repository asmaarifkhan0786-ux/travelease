@extends('layouts.app')

@section('title', 'Bookings - TravelEase')

@section('content')
<div style="color:#f8f9ff;">

    <div style="display:flex; justify-content:space-between; align-items:center; gap:15px; flex-wrap:wrap; margin-bottom:25px;">
        <div>
            <h1 style="font-size:28px; font-weight:800; margin:0 0 8px;">
                Bookings Management
            </h1>
            <p style="color:#9ba4bd; margin:0;">
                Manage customer reservations and travel requests.
            </p>
        </div>

        <a href="{{ route('bookings.create') }}"
           style="display:inline-block; background:linear-gradient(135deg,#805cf7,#5144d8); color:white; padding:12px 18px; border-radius:10px; text-decoration:none; font-weight:700;">
            + Create Booking
        </a>
    </div>

    @if(session('success'))
        <div style="background:#123c31; border:1px solid #24775a; color:#a7f3d0; padding:14px; border-radius:10px; margin-bottom:20px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="background:#111629; border:1px solid #252c43; border-radius:16px; padding:22px; overflow-x:auto;">
        <h2 style="font-size:18px; margin:0 0 8px;">All Bookings</h2>
        <p style="color:#9ba4bd; font-size:13px; margin:0 0 22px;">
            Review and manage travel reservations from one place.
        </p>

        <table style="width:100%; border-collapse:collapse; min-width:600px;">
            <thead>
                <tr style="background:#191f35; text-align:left;">
                    <th style="padding:14px; color:#cdd3e7;">Booking ID</th>
                    <th style="padding:14px; color:#cdd3e7;">Customer</th>
                    <th style="padding:14px; color:#cdd3e7;">Package</th>
                    <th style="padding:14px; color:#cdd3e7;">Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="4" style="padding:35px 14px; text-align:center; color:#9ba4bd;">
                        <div style="font-size:28px; margin-bottom:10px;">📋</div>
                        <strong style="color:#f8f9ff;">No bookings to display</strong>
                        <p style="margin:8px 0 0; font-size:13px;">
                            Create a booking to get started.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
