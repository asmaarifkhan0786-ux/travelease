<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Plan Your Trip | TravelEase</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #080b16;
            --surface: #111629;
            --primary: #7657f6;
            --secondary: #5144d8;
            --text: #f8f9ff;
            --muted: #9ba4bd;
            --border: rgba(255,255,255,.09);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Figtree', sans-serif;
            line-height: 1.6;
        }

        a { color: inherit; text-decoration: none; }

        .container { width: min(1180px, 92%); margin: auto; }

        header {
            background: rgba(8,11,22,.96);
            border-bottom: 1px solid var(--border);
        }

        .nav {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            font-size: 22px;
            font-weight: 800;
        }

        .brand-icon {
            display: grid;
            place-items: center;
            width: 43px;
            height: 43px;
            border-radius: 13px;
            background: linear-gradient(135deg,#805cf7,#5144d8);
        }

        .brand small {
            display: block;
            color: var(--muted);
            font-size: 10px;
            letter-spacing: 1.5px;
        }

        .nav-links {
            display: flex;
            gap: 26px;
            font-size: 14px;
        }

        .nav-links a { color: #c4cade; }
        .nav-links a:hover { color: #b8aaff; }

        .hero {
            padding: 65px 0 45px;
            background: radial-gradient(
                ellipse at 80% 10%,
                rgba(100,65,220,.18),
                transparent 45%
            );
        }

        .eyebrow {
            color: #b8aaff;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        h1 {
            margin: 12px 0;
            font-size: clamp(34px,5vw,52px);
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        .gradient {
            background: linear-gradient(90deg,#b9a5ff,#7c9cff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero p {
            max-width: 650px;
            color: var(--muted);
        }

        .layout {
            display: grid;
            grid-template-columns: minmax(0,1.5fr) minmax(260px,.8fr);
            gap: 28px;
            align-items: start;
            padding-bottom: 75px;
        }

        .form-card, .side-card {
            border: 1px solid var(--border);
            border-radius: 17px;
            background: var(--surface);
            padding: 28px;
        }

        .form-card h2, .side-card h2 {
            font-size: 22px;
            margin-bottom: 7px;
        }

        .subtext {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 24px;
        }

        .fields {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .field { min-width: 0; }
        .full { grid-column: 1 / -1; }

        label {
            display: block;
            margin-bottom: 7px;
            font-size: 13px;
            font-weight: 700;
            color: #e2e5f2;
        }

        input, select, textarea {
            width: 100%;
            min-height: 47px;
            padding: 12px 13px;
            border: 1px solid #303750;
            border-radius: 9px;
            background: #0b1020;
            color: var(--text);
            font: inherit;
            font-size: 14px;
            outline: none;
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(118,87,246,.12);
        }

        textarea {
            resize: vertical;
            min-height: 105px;
        }

        .error {
            color: #ff8e9a;
            font-size: 12px;
            margin-top: 5px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 12px 20px;
            border: 0;
            border-radius: 9px;
            background: linear-gradient(135deg,#805cf7,#5144d8);
            color: white;
            font: inherit;
            font-weight: 800;
            cursor: pointer;
            text-align: center;
        }

        .btn:hover { filter: brightness(1.12); }
        .submit-row { margin-top: 22px; }

        .success {
            padding: 13px 15px;
            margin-bottom: 20px;
            border: 1px solid #247a58;
            border-radius: 9px;
            background: #102b25;
            color: #a8f0d0;
            font-size: 14px;
        }

        .side-card {
            position: sticky;
            top: 25px;
        }

        .side-image {
            width: 100%;
            height: 175px;
            margin-bottom: 20px;
            border-radius: 11px;
            object-fit: cover;
        }

        .benefit {
            display: flex;
            gap: 12px;
            padding: 15px 0;
            border-bottom: 1px solid var(--border);
        }

        .benefit:last-child { border-bottom: 0; }

        .benefit-icon {
            display: grid;
            place-items: center;
            width: 38px;
            height: 38px;
            flex-shrink: 0;
            border-radius: 10px;
            background: rgba(118,87,246,.14);
        }

        .benefit strong {
            display: block;
            font-size: 13px;
        }

        .benefit span {
            color: var(--muted);
            font-size: 12px;
        }

        footer {
            border-top: 1px solid var(--border);
            background: #070a13;
            padding: 25px 0;
            text-align: center;
            color: var(--muted);
            font-size: 12px;
        }

        @media(max-width:800px) {
            .layout { grid-template-columns: 1fr; }
            .side-card { position: static; }
        }

        @media(max-width:520px) {
            .nav {
                padding: 12px 0;
                flex-wrap: wrap;
            }

            .nav-links {
                width: 100%;
                justify-content: space-between;
                gap: 10px;
                font-size: 12px;
            }

            .fields { grid-template-columns: 1fr; }
            .full { grid-column: auto; }

            .form-card, .side-card { padding: 20px; }
        }
    </style>
</head>

<body>

<header>
    <div class="container nav">

        <!-- Logo opens the main homepage -->
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-icon">✈</span>
            <span>
                TravelEase
                <small>TRAVEL &amp; TOURISM</small>
            </span>
        </a>

        <nav class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('packages.index') }}">Packages</a>
            <a href="{{ route('home') }}#why-us">Why Us</a>
            <a href="{{ route('home') }}#contact">Contact</a>
        </nav>

    </div>
</header>

<section class="hero">
    <div class="container">
        <span class="eyebrow">LET'S PLAN SOMETHING SPECIAL</span>

        <h1>
            Plan Your Next
            <span class="gradient">Adventure.</span>
        </h1>

        <p>
            Tell us about your ideal trip. Share your destination, preferred
            dates and travel preferences to start planning your journey.
        </p>
    </div>
</section>

<main class="container layout">

    <section class="form-card">

        <h2>Tell Us About Your Trip</h2>

        <p class="subtext">
            Complete the details below to submit your travel enquiry.
        </p>

        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="success"
                 style="border-color:#8b3547;background:#301522;color:#ffc0ca;">
                Please check the highlighted fields and try again.
            </div>
        @endif

        <form action="{{ route('trip.plan.submit') }}" method="POST">
            @csrf

            <div class="fields">

                <div class="field">
                    <label for="name">Full Name *</label>
                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        required
                        maxlength="100"
                    >
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="email">Email Address *</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="you@example.com"
                        required
                        maxlength="150"
                    >
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="phone">Phone Number *</label>
                    <input
                        id="phone"
                        type="tel"
                        name="phone"
                        value="{{ old('phone') }}"
                        placeholder="+92 3XX XXXXXXX"
                        required
                        maxlength="25"
                    >
                    @error('phone')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="destination">Preferred Destination *</label>
                    <select id="destination" name="destination" required>
                        <option value="">Choose destination</option>

                        @foreach(['Hunza Valley','Skardu','Maldives','Dubai','London','Other'] as $place)
                            <option
                                value="{{ $place }}"
                                @selected(old('destination') === $place)
                            >
                                {{ $place }}
                            </option>
                        @endforeach
                    </select>

                    @error('destination')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="travel_date">Preferred Travel Date *</label>
                    <input
                        id="travel_date"
                        type="date"
                        name="travel_date"
                        min="{{ date('Y-m-d') }}"
                        value="{{ old('travel_date') }}"
                        required
                    >
                    @error('travel_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="travelers">Number of Travellers *</label>
                    <select id="travelers" name="travelers" required>
                        @for($i = 1; $i <= 10; $i++)
                            <option
                                value="{{ $i }}"
                                @selected((string)old('travelers', '2') === (string)$i)
                            >
                                {{ $i }} {{ $i === 1 ? 'Traveller' : 'Travellers' }}
                            </option>
                        @endfor
                    </select>

                    @error('travelers')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field full">
                    <label for="budget">Estimated Budget</label>
                    <select id="budget" name="budget">
                        <option value="">Select your budget (optional)</option>

                        @foreach(['Under PKR 50,000','PKR 50,000 - 100,000','PKR 100,000 - 200,000','PKR 200,000+','Flexible'] as $budget)
                            <option
                                value="{{ $budget }}"
                                @selected(old('budget') === $budget)
                            >
                                {{ $budget }}
                            </option>
                        @endforeach
                    </select>

                    @error('budget')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field full">
                    <label for="message">Additional Requirements</label>
                    <textarea
                        id="message"
                        name="message"
                        maxlength="1000"
                        placeholder="Tell us about accommodation, activities or any special requests..."
                    >{{ old('message') }}</textarea>

                    @error('message')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="submit-row">
                <button type="submit" class="btn">
                    Submit Travel Enquiry &nbsp; →
                </button>
            </div>

        </form>
    </section>

    <aside class="side-card">

        <img
            class="side-image"
            src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80"
            alt="Mountain travel destination"
        >

        <h2>A Journey Made for You</h2>

        <p class="subtext">
            A few details help us understand what you are looking for.
        </p>

        <div class="benefit">
            <div class="benefit-icon">✦</div>
            <div>
                <strong>Choose Your Destination</strong>
                <span>Tell us where you would love to go.</span>
            </div>
        </div>

        <div class="benefit">
            <div class="benefit-icon">◷</div>
            <div>
                <strong>Share Your Travel Dates</strong>
                <span>Choose a preferred departure date.</span>
            </div>
        </div>

        <div class="benefit">
            <div class="benefit-icon">♡</div>
            <div>
                <strong>Personalise Your Journey</strong>
                <span>Add your budget and special requests.</span>
            </div>
        </div>

        <!-- This button now opens the main homepage -->
        <a
            href="{{ route('home') }}"
            class="btn"
            style="width:100%;margin-top:22px;"
        >
            ← Back to Home
        </a>

    </aside>

</main>

<footer>
    © {{ date('Y') }} TravelEase. All rights reserved.
</footer>

</body>
</html>