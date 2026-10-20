
<div class="te-page">
    <div class="te-heading">
        <div>
            <span class="te-eyebrow">FINANCE / OVERVIEW</span>
            <h2>Payment Management</h2>
            <p>Monitor revenue, payment records and outstanding balances.</p>
        </div>
        <div class="te-actions">
            <button class="te-btn te-outline" onclick="exportPayments()">↓ Export CSV</button>
            <button class="te-btn te-primary" onclick="document.getElementById('paymentModal').showModal()">+ Add Payment</button>
        </div>
    </div>

    @php
        $payments = [
            ['PAY-501','Ayesha Khan','TE-1024','18 Oct 2026','Bank Transfer',2400,'Paid'],
            ['PAY-502','Hamza Ali','TE-1025','18 Oct 2026','Cash',300,'Partial'],
            ['PAY-503','Sara Ahmed','TE-1026','17 Oct 2026','Card',3200,'Paid'],
            ['PAY-504','Usman Raza','TE-1027','16 Oct 2026','Cash',0,'Pending'],
            ['PAY-505','Fatima Noor','TE-1028','15 Oct 2026','Card',1000,'Partial'],
        ];
    @endphp

    <div class="te-stats">
        <div class="te-stat"><span>Total Booking Value</span><strong>$10,350</strong><small>Across listed records</small></div>
        <div class="te-stat"><span>Amount Paid</span><strong>$6,900</strong><small class="te-green">Payments received</small></div>
        <div class="te-stat"><span>Pending Balance</span><strong>$3,450</strong><small class="te-orange">Outstanding amount</small></div>
        <div class="te-stat"><span>Transactions</span><strong>05</strong><small>Listed payment records</small></div>
    </div>

    <div class="te-panel">
        <div class="te-panel-head">
            <div><h3>Payment History</h3><p>Recent customer transactions</p></div>
            <input class="te-input" id="paymentSearch" placeholder="Search transaction...">
        </div>

        <div class="te-table-wrap">
            <table class="te-table" id="paymentTable">
                <thead><tr>
                    <th>TRANSACTION</th><th>CUSTOMER</th><th>BOOKING ID</th>
                    <th>DATE</th><th>METHOD</th><th>AMOUNT</th><th>STATUS</th>
                </tr></thead>
                <tbody>
                @foreach($payments as $p)
                    <tr>
                        <td><strong>{{ $p[0] }}</strong></td>
                        <td>{{ $p[1] }}</td>
                        <td>{{ $p[2] }}</td>
                        <td>{{ $p[3] }}</td>
                        <td>{{ $p[4] }}</td>
                        <td><strong>${{ number_format($p[5]) }}</strong></td>
                        <td><span class="te-status {{ strtolower($p[6]) }}">{{ $p[6] }}</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <dialog class="te-modal" id="paymentModal">
        <form method="dialog">
            <div class="te-panel-head">
                <div><h3>Add Payment</h3><p>Enter a payment record</p></div>
                <button class="te-btn te-outline">Close</button>
            </div>
            <label class="te-label">Customer Name</label>
            <input class="te-input te-full" id="payCustomer" required placeholder="Customer name">
            <label class="te-label">Booking ID</label>
            <input class="te-input te-full" id="payBooking" required placeholder="TE-1029">
            <label class="te-label">Amount ($)</label>
            <input class="te-input te-full" id="payAmount" type="number" min="1" required placeholder="500">
            <label class="te-label">Payment Method</label>
            <select class="te-input te-full" id="payMethod">
                <option>Bank Transfer</option><option>Cash</option><option>Card</option>
            </select>
            <button type="button" class="te-btn te-primary te-full" onclick="addPaymentDemo()">Add Record</button>
            <p class="te-note">Demo only: this form does not save to the database.</p>
        </form>
    </dialog>
</div>

<script>
function exportPayments() {
    const rows = [...document.querySelectorAll('#paymentTable tr')];
    const csv = rows.map(row => [...row.querySelectorAll('th,td')]
        .map(cell => '"' + cell.innerText.replace(/"/g, '""') + '"').join(','))
        .join('\n');
    const blob = new Blob(['\uFEFF' + csv], {type: 'text/csv;charset=utf-8;'});
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'travel-ease-payments.csv';
    a.click();
    URL.revokeObjectURL(url);
}
function addPaymentDemo() {
    const name = document.getElementById('payCustomer').value.trim();
    const booking = document.getElementById('payBooking').value.trim();
    const amount = document.getElementById('payAmount').value;
    const method = document.getElementById('payMethod').value;
    if (!name || !booking || !amount || Number(amount) <= 0) {
        alert('Please enter valid payment details.');
        return;
    }
    const tbody = document.querySelector('#paymentTable tbody');
    const row = tbody.insertRow(0);
    ['DEMO-NEW', name, booking, new Date().toLocaleDateString('en-GB'),
     method, '$' + Number(amount).toLocaleString(), 'Paid'].forEach((value, index) => {
        const cell = row.insertCell();
        cell.textContent = value;
        if (index === 0 || index === 5) cell.style.fontWeight = '700';
        if (index === 6) {
            cell.innerHTML = '';
            const badge = document.createElement('span');
            badge.className = 'te-status paid';
            badge.textContent = value;
            cell.appendChild(badge);
        }
    });
    document.getElementById('paymentModal').close();
    document.getElementById('paymentModal').querySelector('form').reset();
}
</script>
