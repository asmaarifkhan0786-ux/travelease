 @extends('layouts.app')

@section('title', 'Bookings - TravelEase')
@section('breadcrumb', 'Bookings')
@section('header_title', 'Booking Management')

@section('content')

<style>
    .booking-page {
        color: #f8f9ff;
    }

    .booking-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 25px;
    }

    .booking-heading h1 {
        font-size: 27px;
        font-weight: 800;
        margin-bottom: 7px;
    }

    .booking-heading p {
        color: #9ba4bd;
        font-size: 13px;
    }

    .booking-stats {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
        margin-bottom: 25px;
    }

    .booking-stat {
        background: #111629;
        border: 1px solid #252c43;
        border-radius: 15px;
        padding: 21px;
    }

    .booking-stat-label {
        color: #9ba4bd;
        font-size: 12px;
        margin-bottom: 12px;
    }

    .booking-stat-value {
        font-size: 26px;
        font-weight: 800;
    }

    .booking-card {
        background: #111629;
        border: 1px solid #252c43;
        border-radius: 15px;
        padding: 23px;
        margin-bottom: 22px;
        overflow: hidden;
    }

    .booking-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 22px;
    }

    .booking-card-header h2 {
        font-size: 17px;
        font-weight: 700;
    }

    .booking-search {
        width: 100%;
        max-width: 280px;
        padding: 11px 14px;
        background: #0b1020;
        border: 1px solid #303751;
        color: #f8f9ff;
        border-radius: 9px;
        outline: none;
    }

    .booking-table-wrap {
        width: 100%;
        overflow-x: auto;
    }

    .booking-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 750px;
    }

    .booking-table th {
        text-align: left;
        color: #9ba4bd;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .5px;
        padding: 15px 12px;
        border-bottom: 1px solid #303751;
    }

    .booking-table td {
        padding: 17px 12px;
        font-size: 13px;
        border-bottom: 1px solid #252c43;
        vertical-align: middle;
    }

    .booking-table tbody tr:hover {
        background: rgba(128, 92, 247, .05);
    }

    .booking-id {
        color: #a995ff;
        font-weight: 700;
    }

    .booking-customer {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .booking-email {
        color: #9ba4bd;
        font-size: 11px;
    }

    .booking-status {
        display: inline-block;
        padding: 6px 10px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        background: rgba(155, 164, 189, .12);
        color: #c0c8dc;
    }

    .booking-status.confirmed {
        background: rgba(34, 197, 94, .12);
        color: #4ade80;
    }

    .booking-status.pending {
        background: rgba(245, 158, 11, .12);
        color: #fbbf24;
    }

    .booking-status.cancelled {
        background: rgba(243, 35, 54, .12);
        color: #fb7185;
    }

    .booking-empty {
        text-align: center;
        padding: 45px 20px !important;
        color: #9ba4bd;
    }

    .booking-empty i {
        font-size: 35px;
        color: #805cf7;
        margin-bottom: 14px;
    }

    .booking-empty h3 {
        color: #f8f9ff;
        font-size: 16px;
        margin-bottom: 8px;
    }

    .booking-action {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: linear-gradient(135deg, #805cf7, #5144d8);
        color: white;
        padding: 11px 15px;
        border-radius: 9px;
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;
        border: none;
        cursor: pointer;
    }

    .booking-action:hover {
        color: white;
        opacity: .9;
    }

    @media (max-width: 900px) {
        .booking-stats {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 520px) {
        .booking-stats {
            grid-template-columns: 1fr;
        }

        .booking-card {
            padding: 15px;
        }

        .booking-heading h1 {
            font-size: 23px;
        }
    }
</style>

<div class="booking-page">

    <div class="booking-heading">
        <div>
            <h1>Booking Management</h1>
            <p>Monitor customer reservations and travel arrangements.</p>
        </div>

        <a href="{{ route('bookings.create') }}" class="booking-action">
            <i class="fa-solid fa-plus"></i>
            New Booking
        </a>
    </div>

    @php
        $bookingRecords = $bookings ?? collect();
        $totalBookings = $bookingRecords->count();

        $pendingBookings = $bookingRecords->filter(function ($booking) {
            return strtolower($booking->status ?? '') === 'pending';
        })->count();

        $confirmedBookings = $bookingRecords->filter(function ($booking) {
            return strtolower($booking->status ?? '') === 'confirmed';
        })->count();
    @endphp

    <div class="booking-stats">
        <div class="booking-stat">
            <div class="booking-stat-label">
                <i class="fa-solid fa-ticket" style="color:#a995ff;margin-right:7px;"></i>
                Total Bookings
            </div>
            <div class="booking-stat-value">{{ $totalBookings }}</div>
        </div>

        <div class="booking-stat">
            <div class="booking-stat-label">
                <i class="fa-regular fa-clock" style="color:#fbbf24;margin-right:7px;"></i>
                Pending Bookings
            </div>
            <div class="booking-stat-value">{{ $pendingBookings }}</div>
        </div>

        <div class="booking-stat">
            <div class="booking-stat-label">
                <i class="fa-solid fa-circle-check" style="color:#4ade80;margin-right:7px;"></i>
                Confirmed Bookings
            </div>
            <div class="booking-stat-value">{{ $confirmedBookings }}</div>
        </div>
    </div>

    <div class="booking-card">

        <div class="booking-card-header">
            <div>
                <h2>All Bookings</h2>
                <p style="color:#9ba4bd;font-size:12px;margin-top:6px;">
                    Customer reservation records
                </p>
            </div>

            <input
                type="search"
                id="bookingSearch"
                class="booking-search"
                placeholder="Search booking, customer..."
                aria-label="Search bookings"
            >
        </div>

        <div class="booking-table-wrap">
            <table class="booking-table">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Customer</th>
                        <th>Package / Trip</th>
                        <th>Travel Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody id="bookingTableBody">
                    @forelse ($bookingRecords as $booking)
                        @php
                            $status = strtolower($booking->status ?? 'pending');

                            $customerName = $booking->customer_name
                                ?? $booking->name
                                ?? $booking->full_name
                                ?? 'Customer';

                            $customerEmail = $booking->email ?? '—';

                            $packageName = $booking->package_name
                                ?? $booking->travel_package
                                ?? $booking->destination
                                ?? 'Travel Booking';

                            $travelDate = $booking->travel_date
                                ?? $booking->departure_date
                                ?? $booking->booking_date
                                ?? null;

                            $amount = $booking->total_amount
                                ?? $booking->amount
                                ?? $booking->price
                                ?? null;
                        @endphp

                        <tr class="booking-row">
                            <td class="booking-id">
                                #BK-{{ str_pad($booking->id, 4, '0', STR_PAD_LEFT) }}
                            </td>

                            <td>
                                <div class="booking-customer">
                                    {{ $customerName }}
                                </div>
                                <div class="booking-email">
                                    {{ $customerEmail }}
                                </div>
                            </td>

                            <td>{{ $packageName }}</td>

                            <td>
                                @if ($travelDate)
                                    {{ \Illuminate\Support\Carbon::parse($travelDate)->format('d M Y') }}
                                @else
                                    —
                                @endif
                            </td>

                            <td>
                                @if (is_numeric($amount))
                                    {{ number_format((float) $amount, 2) }}
                                @else
                                    —
                                @endif
                            </td>

                            <td>
                                <span class="booking-status {{ in_array($status, ['confirmed', 'pending', 'cancelled']) ? $status : '' }}">
                                    {{ ucfirst($status) }}
                                </span>
                            </td>

                            <td>
                                <a
                                    href="{{ route('bookings.show', $booking->id) }}"
                                    style="color:#a995ff;text-decoration:none;font-size:12px;font-weight:700;"
                                >
                                    <i class="fa-regular fa-eye"></i>
                                    View
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="booking-empty">
                                <i class="fa-solid fa-calendar-xmark"></i>
                                <h3>No Bookings Found</h3>
                                <p>No customer bookings are available yet.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <p id="bookingNoResults"
           style="display:none;text-align:center;padding:25px;color:#9ba4bd;font-size:13px;">
            No matching bookings found.
        </p>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('bookingSearch');
        const rows = document.querySelectorAll('.booking-row');
        const noResults = document.getElementById('bookingNoResults');

        if (!searchInput) return;

        searchInput.addEventListener('input', function () {
            const query = this.value.toLowerCase().trim();
            let visibleRows = 0;

            rows.forEach(function (row) {
                const matches = row.textContent.toLowerCase().includes(query);

                row.style.display = matches ? '' : 'none';

                if (matches) {
                    visibleRows++;
                }
            });

            noResults.style.display =
                query !== '' && visibleRows === 0 ? 'block' : 'none';
        });
    });
</script>

@endsection