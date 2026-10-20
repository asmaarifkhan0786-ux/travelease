
<div class="te-page">
    <div class="te-heading">
        <div>
            <span class="te-eyebrow">TRAVEL OPERATIONS / BOOKINGS</span>
            <h2>Booking Management</h2>
            <p>Manage reservations, travelers and upcoming trips.</p>
        </div>
        <button class="te-btn te-primary" onclick="window.print()">Export / Print ↗</button>
    </div>

    @php
        $bookings = [
            ['TE-1024','Ayesha Khan','Dubai Holiday Package','2 Travelers','21 Oct 2026','5 Days','$2,400','Confirmed'],
            ['TE-1025','Hamza Ali','Hunza Valley Tour','4 Travelers','23 Oct 2026','3 Days','$850','Pending'],
            ['TE-1026','Sara Ahmed','Turkey Explorer Package','2 Travelers','26 Oct 2026','7 Days','$3,200','Confirmed'],
            ['TE-1027','Usman Raza','Northern Areas Tour','3 Travelers','28 Oct 2026','4 Days','$1,150','Cancelled'],
            ['TE-1028','Fatima Noor','Bali Escape Package','2 Travelers','30 Oct 2026','6 Days','$2,750','Pending'],
        ];
    @endphp

    <div class="te-stats">
        <div class="te-stat"><span>Total Bookings</span><strong>12,400</strong><small>All reservations</small></div>
        <div class="te-stat"><span>Confirmed</span><strong>8,240</strong><small class="te-green">Ready to travel</small></div>
        <div class="te-stat"><span>Pending</span><strong>2,760</strong><small class="te-orange">Awaiting confirmation</small></div>
        <div class="te-stat"><span>Cancelled</span><strong>1,400</strong><small class="te-red">Cancelled reservations</small></div>
    </div>

    <div class="te-panel">
        <div class="te-panel-head">
            <div><h3>All Reservations</h3><p>Upcoming bookings and customer details</p></div>
            <input class="te-input" id="bookingSearch" placeholder="Search booking or customer...">
        </div>

        <div class="te-table-wrap">
            <table class="te-table" id="bookingTable">
                <thead><tr>
                    <th>BOOKING</th><th>CUSTOMER</th><th>TRIP / PACKAGE</th>
                    <th>TRAVEL DATE</th><th>DURATION</th><th>AMOUNT</th><th>STATUS</th>
                </tr></thead>
                <tbody>
                @foreach($bookings as $b)
                    <tr>
                        <td><strong>{{ $b[0] }}</strong><small class="te-sub">{{ $b[3] }}</small></td>
                        <td>{{ $b[1] }}</td>
                        <td>{{ $b[2] }}</td>
                        <td>{{ $b[4] }}</td>
                        <td>{{ $b[5] }}</td>
                        <td><strong>{{ $b[6] }}</strong></td>
                        <td><span class="te-status {{ strtolower($b[7]) }}">{{ $b[7] }}</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
