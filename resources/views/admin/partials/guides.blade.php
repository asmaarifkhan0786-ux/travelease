
<div class="te-page">
    <div class="te-heading">
        <div>
            <span class="te-eyebrow">PEOPLE / GUIDE DIRECTORY</span>
            <h2>Tour Guide Overview</h2>
            <p>Manage your guides, qualifications and availability.</p>
        </div>
        <button class="te-btn te-primary" onclick="document.getElementById('guideModal').showModal()">+ Add Guide</button>
    </div>

    @php
        $guides = [
            ['Ahmed Hassan','AH','Historical Tours','Lahore, Pakistan','LIC-2041','6 years','4.9','Available'],
            ['Fatima Noor','FN','Cultural Tours','Islamabad, Pakistan','LIC-2042','4 years','4.8','Available'],
            ['Bilal Ahmed','BA','Adventure Tours','Skardu, Pakistan','LIC-2043','8 years','5.0','On Tour'],
            ['Zara Malik','ZM','City Tours','Karachi, Pakistan','LIC-2044','3 years','4.7','Available'],
            ['Usman Tariq','UT','Nature & Wildlife','Hunza, Pakistan','LIC-2045','5 years','4.8','On Tour'],
            ['Mariam Shah','MS','Heritage Tours','Multan, Pakistan','LIC-2046','7 years','4.9','Available'],
        ];
    @endphp

    <div class="te-stats">
        <div class="te-stat"><span>Total Guides</span><strong>48</strong><small>Registered guides</small></div>
        <div class="te-stat"><span>Available</span><strong>32</strong><small class="te-green">Ready for assignment</small></div>
        <div class="te-stat"><span>Currently on Tour</span><strong>12</strong><small class="te-blue">Active assignments</small></div>
        <div class="te-stat"><span>Under Review</span><strong>04</strong><small class="te-orange">License verification</small></div>
    </div>

    <div class="te-panel">
        <div class="te-panel-head te-guide-filters">
            <div><h3>Guide Directory</h3><p>Profiles, license details and specialties</p></div>
            <input class="te-input" id="guideSearch" placeholder="Search guides...">
            <select class="te-input" id="guideFilter">
                <option value="">All Availability</option>
                <option value="Available">Available</option>
                <option value="On Tour">On Tour</option>
            </select>
        </div>

        <div class="te-guide-grid" id="guideGrid">
            @foreach($guides as $g)
                <article class="te-guide-card"
                    data-search="{{ strtolower(implode(' ', $g)) }}"
                    data-status="{{ $g[7] }}">
                    <div class="te-guide-top">
                        <div class="te-guide-avatar">{{ $g[1] }}</div>
                        <span class="te-status {{ $g[7] === 'Available' ? 'paid' : 'partial' }}">{{ $g[7] }}</span>
                    </div>
                    <h3>{{ $g[0] }}</h3>
                    <p class="te-guide-specialty">{{ $g[2] }}</p>
                    <div class="te-guide-detail"><span>Location</span><strong>{{ $g[3] }}</strong></div>
                    <div class="te-guide-detail"><span>License No.</span><strong>{{ $g[4] }}</strong></div>
                    <div class="te-guide-detail"><span>Experience</span><strong>{{ $g[5] }}</strong></div>
                    <div class="te-guide-bottom">
                        <span>★ {{ $g[6] }} <small>Rating</small></span>
                        <button class="te-btn te-outline te-small"
                            onclick="alert('Guide: {{ $g[0] }}\nLicense: {{ $g[4] }}\nSpecialty: {{ $g[2] }}')">
                            View Profile →
                        </button>
                    </div>
                </article>
            @endforeach
        </div>
        <p class="te-empty" id="guideEmpty" hidden>No guides match your search.</p>
    </div>

    <dialog class="te-modal" id="guideModal">
        <form method="dialog" id="guideForm">
            <div class="te-panel-head">
                <div><h3>Add New Guide</h3><p>Create a guide profile preview</p></div>
                <button class="te-btn te-outline">Close</button>
            </div>
            <label class="te-label">Full Name</label>
            <input class="te-input te-full" id="guideName" required placeholder="Full name">
            <label class="te-label">Specialty</label>
            <input class="te-input te-full" id="guideSpecialty" required placeholder="e.g. Historical Tours">
            <label class="te-label">Location</label>
            <input class="te-input te-full" id="guideLocation" required placeholder="City, Country">
            <label class="te-label">License Number</label>
            <input class="te-input te-full" id="guideLicense" required placeholder="LIC-2047">
            <button type="button" class="te-btn te-primary te-full" onclick="addGuideDemo()">Create Preview</button>
            <p class="te-note">Demo only: the new card is temporary and is not saved to the database.</p>
        </form>
    </dialog>
</div>

<script>
(function () {
    const search = document.getElementById('guideSearch');
    const filter = document.getElementById('guideFilter');
    const cards = [...document.querySelectorAll('.te-guide-card')];

    function filterGuides() {
        let visible = 0;
        cards.forEach(card => {
            const matchesSearch = card.dataset.search.includes(search.value.toLowerCase());
            const matchesStatus = !filter.value || card.dataset.status === filter.value;
            card.hidden = !(matchesSearch && matchesStatus);
            if (!card.hidden) visible++;
        });
        document.getElementById('guideEmpty').hidden = visible !== 0;
    }

    search.addEventListener('input', filterGuides);
    filter.addEventListener('change', filterGuides);
})();

function addGuideDemo() {
    const name = document.getElementById('guideName').value.trim();
    const specialty = document.getElementById('guideSpecialty').value.trim();
    const location = document.getElementById('guideLocation').value.trim();
    const license = document.getElementById('guideLicense').value.trim();

    if (!name || !specialty || !location || !license) {
        alert('Please complete all guide details.');
        return;
    }

    const grid = document.getElementById('guideGrid');
    const card = document.createElement('article');
    card.className = 'te-guide-card';
    card.dataset.search = [name, specialty, location, license, 'available'].join(' ').toLowerCase();
    card.dataset.status = 'Available';

    const top = document.createElement('div');
    top.className = 'te-guide-top';
    const avatar = document.createElement('div');
    avatar.className = 'te-guide-avatar';
    avatar.textContent = name.split(/\s+/).map(part => part[0]).join('').slice(0, 2).toUpperCase();
    const badge = document.createElement('span');
    badge.className = 'te-status paid';
    badge.textContent = 'Available';
    top.append(avatar, badge);

    const title = document.createElement('h3');
    title.textContent = name;
    const speciality = document.createElement('p');
    speciality.className = 'te-guide-specialty';
    speciality.textContent = specialty;

    card.append(top, title, speciality);

    [['Location', location], ['License No.', license],
     ['Experience', 'Not specified']].forEach(([label, value]) => {
        const row = document.createElement('div');
        row.className = 'te-guide-detail';
        const left = document.createElement('span');
        left.textContent = label;
        const right = document.createElement('strong');
        right.textContent = value;
        row.append(left, right);
        card.append(row);
    });

    const bottom = document.createElement('div');
    bottom.className = 'te-guide-bottom';
    const rating = document.createElement('span');
    rating.textContent = '— ';
    const ratingNote = document.createElement('small');
    ratingNote.textContent = 'Not rated';
    rating.append(ratingNote);
    bottom.append(rating);
    card.append(bottom);

    grid.prepend(card);
    document.getElementById('guideSearch').value = '';
    document.getElementById('guideFilter').value = '';
    document.getElementById('guideModal').close();
    document.getElementById('guideForm').reset();
    document.getElementById('guideEmpty').hidden = true;
}
</script>
