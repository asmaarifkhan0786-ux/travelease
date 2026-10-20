 @extends('layouts.app')

@section('title', 'Payments - TravelEase')
@section('breadcrumb', 'Payments')
@section('header_title', 'Payment Management')

@section('content')
<div style="margin-bottom: 25px;">
    <h1 style="font-size: 27px; font-weight: 800; margin-bottom: 8px;">
        Payment Management
    </h1>
    <p style="color: #9ba4bd; font-size: 14px;">
        View and manage customer payment records.
    </p>
</div>

<div class="content-card">
    <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 25px;">
        <div style="width: 48px; height: 48px; border-radius: 13px; background: rgba(128,92,247,.16); display: flex; align-items: center; justify-content: center; color: #a995ff; font-size: 21px;">
            <i class="fa-solid fa-wallet"></i>
        </div>
        <div>
            <h2 style="font-size: 18px; margin-bottom: 5px;">Payment Records</h2>
            <p style="font-size: 13px; color: #9ba4bd;">
                Overview of customer payments.
            </p>
        </div>
    </div>

    <div style="padding: 40px 20px; text-align: center; border: 1px dashed #303751; border-radius: 12px;">
        <i class="fa-regular fa-credit-card"
           style="font-size: 38px; color: #805cf7; margin-bottom: 18px;"></i>

        <h3 style="font-size: 17px; margin-bottom: 10px;">
            No Payment Records Yet
        </h3>

        <p style="font-size: 13px; color: #9ba4bd; line-height: 1.8;">
            Payment records will appear here when they are connected
            to the booking and payment database.
        </p>
    </div>
</div>
@endsection