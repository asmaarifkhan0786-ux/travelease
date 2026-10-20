
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Travel Packages | TravelEase</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #080b16;
            --surface: #111629;
            --surface-light: #171d34;
            --primary: #7657f6;
            --secondary: #5144d8;
            --text: #f8f9ff;
            --muted: #9ba4bd;
            --border: rgba(255,255,255,.09);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Figtree', sans-serif;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        /* Navigation */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(8,11,22,.94);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            min-height: 76px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 22px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            font-size: 23px;
            font-weight: 800;
            letter-spacing: -.7px;
        }

        .brand-icon {
            width: 43px;
            height: 43px;
            display: grid;
            place-items: center;
            border-radius: 13px;
            background: linear-gradient(135deg, #8b5cf6, #4f46e5);
            box-shadow: 0 5px 24px rgba(118,87,246,.25);
        }

        .brand small {
            display: block;
            font-size: 10px;
            color: var(--muted);
            font-weight: 500;
            letter-spacing: 1.7px;
            line-height: 1.3;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
            font-size: 14px;
            font-weight: 600;
            color: #c4cade;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #a99aff;
        }

        .nav-cta,
        .primary-btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 12px 21px;
            border-radius: 10px;
            background: linear-gradient(135deg, #805cf7, #5144d8);
            color: #fff;
            font-weight: 700;
            font-size: 14px;
            border: 1px solid rgba(255,255,255,.12);
            transition: .25s ease;
        }

        .nav-cta:hover,
        .primary-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(118,87,246,.25);
        }

        /* Hero */

        .hero {
            position: relative;
            overflow: hidden;
            padding: 83px 0 75px;
            background:
                radial-gradient(ellipse at 80% 10%, rgba(100,65,220,.19), transparent 38%),
                radial-gradient(ellipse at 10% 80%, rgba(62,75,190,.12), transparent 35%);
            border-bottom: 1px solid var(--border);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            align-items: center;
            gap: 55px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 7px 13px;
            border: 1px solid rgba(151,126,255,.28);
            border-radius: 50px;
            color: #b8aaff;
            background: rgba(118,87,246,.09);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .eyebrow span {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #9c83ff;
        }

        .hero h1 {
            margin: 22px 0 18px;
            font-size: clamp(38px, 5vw, 62px);
            line-height: 1.1;
            letter-spacing: -2.3px;
            font-weight: 800;
        }

        .gradient-text {
            background: linear-gradient(90deg, #b9a5ff, #7c9cff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero p {
            max-width: 540px;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.9;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
            margin-top: 29px;
        }

        .secondary-btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 12px 21px;
            border-radius: 10px;
            border: 1px solid var(--border);
            background: rgba(255,255,255,.035);
            font-size: 14px;
            font-weight: 700;
            transition: .25s;
        }

        .secondary-btn:hover {
            background: var(--surface-light);
        }

        .hero-image {
            position: relative;
            min-height: 365px;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,.14);
            box-shadow: 0 25px 65px rgba(0,0,0,.32);
        }

        .hero-image img {
            width: 100%;
            height: 365px;
            object-fit: cover;
            display: block;
        }

        .image-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(7,10,24,.9), transparent 65%);
        }

        .image-caption {
            position: absolute;
            left: 23px;
            right: 23px;
            bottom: 21px;
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 12px;
        }

        .image-caption h3 {
            font-size: 22px;
        }

        .image-caption p {
            font-size: 13px;
        }

        .caption-tag {
            padding: 7px 10px;
            border-radius: 8px;
            background: rgba(118,87,246,.9);
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }

        /* Trust strip */

        .trust-strip {
            border-bottom: 1px solid var(--border);
            background: #0c1020;
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 23px 0;
        }

        .trust-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .trust-icon {
            width: 43px;
            height: 43px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: rgba(118,87,246,.12);
            font-size: 20px;
        }

        .trust-item strong {
            display: block;
            font-size: 14px;
        }

        .trust-item small {
            color: var(--muted);
            font-size: 12px;
        }

        /* Package section */

        .packages-section {
            padding: 78px 0 85px;
        }

        .section-heading {
            text-align: center;
            max-width: 680px;
            margin: 0 auto 35px;
        }

        .section-heading h2 {
            margin: 13px 0 10px;
            font-size: clamp(30px, 4vw, 42px);
            letter-spacing: -1.2px;
            line-height: 1.2;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 15px;
        }

        .filter-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 35px;
        }

        .filter-btn {
            padding: 10px 18px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: var(--surface);
            color: #c3c9dc;
            font-family: inherit;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: linear-gradient(135deg, #805cf7, #5144d8);
            color: white;
            border-color: transparent;
        }

        .package-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 23px;
        }

        .package-card {
            min-width: 0;
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: 17px;
            background: var(--surface);
            transition: transform .3s, border-color .3s, box-shadow .3s;
        }

        .package-card:hover {
            transform: translateY(-6px);
            border-color: rgba(137,111,255,.55);
            box-shadow: 0 18px 40px rgba(0,0,0,.22);
        }

        .package-card[hidden] {
            display: none;
        }

        .package-image {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .package-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform .5s;
        }

        .package-card:hover .package-image img {
            transform: scale(1.06);
        }

        .package-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            padding: 7px 11px;
            border-radius: 7px;
            background: rgba(15,19,39,.9);
            border: 1px solid rgba(255,255,255,.15);
            color: #d4c9ff;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .4px;
        }

        .package-duration {
            position: absolute;
            bottom: 14px;
            right: 14px;
            padding: 7px 10px;
            border-radius: 7px;
            background: rgba(8,11,22,.87);
            font-size: 12px;
            font-weight: 700;
        }

        .package-content {
            padding: 21px;
        }

        .destination-type {
            color: #a998ff;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.3px;
        }

        .package-content h3 {
            margin: 6px 0 8px;
            font-size: 22px;
            line-height: 1.3;
        }

        .package-description {
            min-height: 48px;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        .package-features {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 17px 0;
        }

        .feature {
            padding: 6px 9px;
            border: 1px solid var(--border);
            border-radius: 6px;
            color: #c2c9dd;
            font-size: 11px;
        }

        .package-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding-top: 16px;
            border-top: 1px solid var(--border);
        }

        .price-label {
            display: block;
            color: var(--muted);
            font-size: 11px;
        }

        .price {
            color: white;
            font-size: 23px;
            font-weight: 800;
            line-height: 1.4;
        }

        .price small {
            color: var(--muted);
            font-size: 11px;
            font-weight: 500;
        }

        .book-btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 10px 13px;
            border-radius: 8px;
            background: linear-gradient(135deg, #805cf7, #5144d8);
            color: white;
            font-size: 12px;
            font-weight: 800;
            white-space: nowrap;
            transition: .2s;
        }

        .book-btn:hover {
            filter: brightness(1.15);
        }

        .empty-state {
            display: none;
            margin-top: 20px;
            text-align: center;
            color: var(--muted);
        }

        /* CTA */

        .cta-section {
            padding: 0 0 80px;
        }

        .cta-box {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            padding: 38px 42px;
            border: 1px solid rgba(160,139,255,.25);
            border-radius: 20px;
            background:
                radial-gradient(ellipse at 90% 10%, rgba(165,135,255,.2), transparent 42%),
                linear-gradient(120deg, #171b36, #111629);
        }

        .cta-box h2 {
            font-size: clamp(23px, 3vw, 32px);
            line-height: 1.3;
            margin-bottom: 9px;
        }

        .cta-box p {
            max-width: 570px;
            color: var(--muted);
            font-size: 14px;
        }

        /* Footer */

        .footer {
            border-top: 1px solid var(--border);
            background: #070a13;
        }

        .footer-main {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            padding: 28px 0;
        }

        .footer-brand {
            font-size: 18px;
            font-weight: 800;
        }

        .footer-brand span {
            color: #a998ff;
        }

        .footer p {
            color: var(--muted);
            font-size: 12px;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            color: #c2c9dc;
            font-size: 12px;
        }

        .footer-links a:hover {
            color: #b8aaff;
        }

        .footer-bottom {
            padding: 15px 0;
            text-align: center;
            border-top: 1px solid var(--border);
            color: #78819b;
            font-size: 11px;
        }

        @media (max-width: 900px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .hero {
                padding: 60px 0;
            }

            .hero-image,
            .hero-image img {
                height: 320px;
                min-height: 320px;
            }

            .package-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .nav-links {
                gap: 15px;
            }
        }

        @media (max-width: 600px) {
            .nav-inner {
                min-height: 68px;
                flex-wrap: wrap;
                padding: 12px 0;
            }

            .brand {
                font-size: 20px;
            }

            .nav-links {
                order: 3;
                width: 100%;
                justify-content: space-between;
                gap: 10px;
                font-size: 12px;
            }

            .nav-cta {
                padding: 9px 12px;
                font-size: 12px;
            }

            .hero h1 {
                letter-spacing: -1.4px;
            }

            .hero-image,
            .hero-image img {
                height: 260px;
                min-height: 260px;
            }

            .trust-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .trust-item {
                justify-content: flex-start;
            }

            .packages-section {
                padding: 55px 0;
            }

            .package-grid {
                grid-template-columns: 1fr;
            }

            .package-image {
                height: 235px;
            }

            .cta-box {
                padding: 28px 23px;
                align-items: flex-start;
                flex-direction: column;
            }

            .footer-main {
                align-items: flex-start;
                flex-direction: column;
            }

            .footer-links {
                gap: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <header class="navbar">
        <div class="container nav-inner">

            <a href="/" class="brand">
                <span class="brand-icon">✈</span>
                <span>
                    TravelEase
                    <small>TRAVEL &amp; TOURISM</small>
                </span>
            </a>

            <nav class="nav-links" aria-label="Main navigation">
                <a href="/">Home</a>
                <a href="#packages" class="active">Packages</a>
                <a href="#why-us">Why Us</a>
                <a href="#contact">Contact</a>
            </nav>

            <a href="#packages" class="nav-cta">Explore Trips ↗</a>

        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="container hero-grid">

            <div>
                <span class="eyebrow">
                    <span></span>
                    YOUR NEXT JOURNEY STARTS HERE
                </span>

                <h1>
                    Discover Places.<br>
                    Create <span class="gradient-text">Memories.</span>
                </h1>

                <p>
                    Explore thoughtfully selected travel experiences,
                    discover breathtaking destinations and find a journey
                    that fits your plans, preferences and budget.
                </p>

                <div class="hero-actions">
                    <a href="#packages" class="primary-btn">
                        Explore Packages <span>→</span>
                    </a>

                    <a href="#why-us" class="secondary-btn">
                        Discover Our Services
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <img
                    src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1100&q=85"
                    alt="Majestic mountain destination"
                >

                <div class="image-overlay"></div>

                <div class="image-caption">
                    <div>
                        <h3>Beyond the Ordinary</h3>
                        <p>Find your next favourite destination.</p>
                    </div>

                    <span class="caption-tag">Explore More</span>
                </div>
            </div>

        </div>
    </section>

    <!-- Trust strip -->
    <section class="trust-strip" id="why-us">
        <div class="container trust-grid">

            <div class="trust-item">
                <div class="trust-icon">✦</div>
                <div>
                    <strong>Handpicked Destinations</strong>
                    <small>Experiences worth remembering</small>
                </div>
            </div>

            <div class="trust-item">
                <div class="trust-icon">◈</div>
                <div>
                    <strong>Flexible Travel Options</strong>
                    <small>Trips for different travel styles</small>
                </div>
            </div>

            <div class="trust-item">
                <div class="trust-icon">♡</div>
                <div>
                    <strong>Personalised Assistance</strong>
                    <small>Support for your travel plans</small>
                </div>
            </div>

        </div>
    </section>

    <!-- Packages -->
    <main>
        <section class="packages-section" id="packages">
            <div class="container">

                <div class="section-heading">
                    <span class="eyebrow">EXPLORE OUR COLLECTION</span>
                    <h2>Find Your Perfect <span class="gradient-text">Getaway</span></h2>
                    <p>
                        From peaceful mountain escapes to unforgettable
                        international adventures, explore the possibilities.
                    </p>
                </div>

                <div class="filter-row" aria-label="Filter packages">
                    <button class="filter-btn active" data-filter="all" type="button">
                        All Packages
                    </button>
                    <button class="filter-btn" data-filter="mountains" type="button">
                        Mountains
                    </button>
                    <button class="filter-btn" data-filter="beach" type="button">
                        Beach &amp; Islands
                    </button>
                    <button class="filter-btn" data-filter="international" type="button">
                        International
                    </button>
                </div>

                <div class="package-grid">

                    <!-- Package 1 -->
                    <article class="package-card" data-category="mountains">
                        <div class="package-image">
                            <img
                                src="https://images.unsplash.com/photo-1472396961693-142e6e269027?auto=format&fit=crop&w=900&q=80"
                                alt="Beautiful northern mountain landscape"
                                loading="lazy"
                            >
                            <span class="package-badge">NATURE ESCAPE</span>
                            <span class="package-duration">5 Days / 4 Nights</span>
                        </div>

                        <div class="package-content">
                            <span class="destination-type">Pakistan · Northern Areas</span>
                            <h3>Hunza Valley Retreat</h3>
                            <p class="package-description">
                                Discover dramatic peaks, peaceful valleys,
                                scenic roads and the charm of northern Pakistan.
                            </p>

                            <div class="package-features">
                                <span class="feature">✦ Scenic Tours</span>
                                <span class="feature">⌂ Accommodation</span>
                                <span class="feature">✓ Guided Visits</span>
                            </div>

                            <div class="package-footer">
                                <div>
                                    <span class="price-label">Starting from</span>
                                    <div class="price">PKR 45,000 <small>/ person</small></div>
                                </div>
                                <a class="book-btn" href="#contact">Enquire ↗</a>
                            </div>
                        </div>
                    </article>

                    <!-- Package 2 -->
                    <article class="package-card" data-category="mountains">
                        <div class="package-image">
                            <img
                                src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=900&q=80"
                                alt="Snow-covered mountain peaks"
                                loading="lazy"
                            >
                            <span class="package-badge">ADVENTURE</span>
                            <span class="package-duration">4 Days / 3 Nights</span>
                        </div>

                        <div class="package-content">
                            <span class="destination-type">Pakistan · Mountain Escape</span>
                            <h3>Skardu Discovery</h3>
                            <p class="package-description">
                                Enjoy majestic landscapes, fresh mountain air
                                and a memorable escape into nature.
                            </p>

                            <div class="package-features">
                                <span class="feature">✦ Sightseeing</span>
                                <span class="feature">⌂ Stay Options</span>
                                <span class="feature">✓ Excursions</span>
                            </div>

                            <div class="package-footer">
                                <div>
                                    <span class="price-label">Starting from</span>
                                    <div class="price">PKR 38,000 <small>/ person</small></div>
                                </div>
                                <a class="book-btn" href="#contact">Enquire ↗</a>
                            </div>
                        </div>
                    </article>

                    <!-- Package 3 -->
                    <article class="package-card" data-category="beach">
                        <div class="package-image">
                            <img
                                src="https://images.unsplash.com/photo-1514282401047-d79a71a590e8?auto=format&fit=crop&w=900&q=80"
                                alt="Tropical island with turquoise water"
                                loading="lazy"
                            >
                            <span class="package-badge">ISLAND ESCAPE</span>
                            <span class="package-duration">5 Days / 4 Nights</span>
                        </div>

                        <div class="package-content">
                            <span class="destination-type">Maldives · Indian Ocean</span>
                            <h3>Maldives Island Escape</h3>
                            <p class="package-description">
                                Experience tropical scenery, turquoise
                                waters and a relaxing island holiday.
                            </p>

                            <div class="package-features">
                                <span class="feature">✦ Island Activities</span>
                                <span class="feature">⌂ Resort Options</span>
                                <span class="feature">✓ Leisure Time</span>
                            </div>

                            <div class="package-footer">
                                <div>
                                    <span class="price-label">Starting from</span>
                                    <div class="price">PKR 185,000 <small>/ person</small></div>
                                </div>
                                <a class="book-btn" href="#contact">Enquire ↗</a>
                            </div>
                        </div>
                    </article>

                    <!-- Package 4 -->
                    <article class="package-card" data-category="international">
                        <div class="package-image">
                            <img
                                src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=900&q=80"
                                alt="Dubai city skyline"
                                loading="lazy"
                            >
                            <span class="package-badge">CITY EXPERIENCE</span>
                            <span class="package-duration">4 Days / 3 Nights</span>
                        </div>

                        <div class="package-content">
                            <span class="destination-type">UAE · Middle East</span>
                            <h3>Dubai City Experience</h3>
                            <p class="package-description">
                                Explore iconic architecture, vibrant shopping
                                destinations and exciting city attractions.
                            </p>

                            <div class="package-features">
                                <span class="feature">✦ City Tours</span>
                                <span class="feature">⌂ Hotel Options</span>
                                <span class="feature">✓ Attractions</span>
                            </div>

                            <div class="package-footer">
                                <div>
                                    <span class="price-label">Starting from</span>
                                    <div class="price">PKR 120,000 <small>/ person</small></div>
                                </div>
                                <a class="book-btn" href="#contact">Enquire ↗</a>
                            </div>
                        </div>
                    </article>

                    <!-- Package 5 -->
                    <article class="package-card" data-category="international">
                        <div class="package-image">
                            <img
                                src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=900&q=80"
                                alt="London city landmarks"
                                loading="lazy"
                            >
                            <span class="package-badge">CULTURE &amp; CITY</span>
                            <span class="package-duration">6 Days / 5 Nights</span>
                        </div>

                        <div class="package-content">
                            <span class="destination-type">United Kingdom · Europe</span>
                            <h3>London Highlights</h3>
                            <p class="package-description">
                                Discover historic landmarks, world-class
                                museums and the energy of a global city.
                            </p>

                            <div class="package-features">
                                <span class="feature">✦ City Discovery</span>
                                <span class="feature">⌂ Stay Options</span>
                                <span class="feature">✓ Landmark Visits</span>
                            </div>

                            <div class="package-footer">
                                <div>
                                    <span class="price-label">Starting from</span>
                                    <div class="price">PKR 295,000 <small>/ person</small></div>
                                </div>
                                <a class="book-btn" href="#contact">Enquire ↗</a>
                            </div>
                        </div>
                    </article>

                    <!-- Package 6 -->
                    <article class="package-card" data-category="beach">
                        <div class="package-image">
                            <img
                                src="https://images.unsplash.com/photo-1530789253388-582c481c54b0?auto=format&fit=crop&w=900&q=80"
                                alt="Beautiful scenic travel destination"
                                loading="lazy"
                            >
                            <span class="package-badge">RELAX &amp; EXPLORE</span>
                            <span class="package-duration">5 Days / 4 Nights</span>
                        </div>

                        <div class="package-content">
                            <span class="destination-type">International · Leisure</span>
                            <h3>Island &amp; Leisure Escape</h3>
                            <p class="package-description">
                                Take time to unwind, explore beautiful scenery
                                and enjoy a refreshing change of pace.
                            </p>

                            <div class="package-features">
                                <span class="feature">✦ Leisure Activities</span>
                                <span class="feature">⌂ Stay Options</span>
                                <span class="feature">✓ Sightseeing</span>
                            </div>

                            <div class="package-footer">
                                <div>
                                    <span class="price-label">Starting from</span>
                                    <div class="price">PKR 150,000 <small>/ person</small></div>
                                </div>
                                <a class="book-btn" href="#contact">Enquire ↗</a>
                            </div>
                        </div>
                    </article>

                </div>

                <p class="empty-state" id="emptyState">
                    No packages found in this category.
                </p>

            </div>
        </section>

        <!-- Contact CTA -->
        <section class="cta-section" id="contact">
            <div class="container">
                <div class="cta-box">
                    <div>
                        <h2>Your Next Adventure Starts with a Plan.</h2>
                        <p>
                            Have a destination in mind? Get in touch to discuss
                            your preferred dates, accommodation and travel plans.
                        </p>
                    </div>
<a href="{{ route('trip.plan') }}" class="primary-btn">
    Plan My Trip ↗
</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-main">

            <div>
                <div class="footer-brand">Travel<span>Ease</span></div>
                <p>Travel &amp; Tourism Services</p>
            </div>

            <div class="footer-links">
                <a href="/">Home</a>
                <a href="#packages">Packages</a>
                <a href="#why-us">Why Us</a>
                <a href="#contact">Contact</a>
            </div>

        </div>

        <div class="footer-bottom">
            © {{ date('Y') }} TravelEase. All rights reserved.
        </div>
    </footer>

    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
        const packageCards = document.querySelectorAll('.package-card');
        const emptyState = document.getElementById('emptyState');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;
                let visibleCount = 0;

                filterButtons.forEach(item => {
                    item.classList.toggle('active', item === button);
                });

                packageCards.forEach(card => {
                    const matches =
                        filter === 'all' ||
                        card.dataset.category === filter;

                    card.hidden = !matches;

                    if (matches) {
                        visibleCount++;
                    }
                });

                emptyState.style.display =
                    visibleCount === 0 ? 'block' : 'none';
            });
        });
    </script>

</body>
</html>