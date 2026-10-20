<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TravelEase</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #08080f;
            color: white;
            min-height: 100vh;
        }

        .home {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            height: 75px;
            padding: 0 55px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #20202b;
            background: #0b0b12;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: linear-gradient(135deg, #6840ff, #875cff);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .logo-name {
            font-size: 19px;
            font-weight: 800;
        }

        .logo-name span {
            color: #7954ff;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav a {
            color: #9998a4;
            text-decoration: none;
            font-size: 12px;
            font-weight: 500;
        }

        .nav a:hover {
            color: white;
        }

        .login {
            border: 1px solid #704cff;
            padding: 9px 18px;
            border-radius: 20px;
            color: white !important;
        }

        .hero {
            flex: 1;
            min-height: calc(100vh - 75px);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 60px 9%;
            background:
                radial-gradient(
                    circle at 80% 20%,
                    rgba(119, 79, 255, .25),
                    transparent 35%
                ),
                #08080f;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 550px;
            height: 550px;
            border-radius: 50%;
            right: -250px;
            top: -180px;
            background: rgba(112, 76, 255, .08);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 610px;
        }

        .small-title {
            display: inline-block;
            color: #8d72ff;
            background: rgba(112, 76, 255, .12);
            border: 1px solid rgba(112, 76, 255, .25);
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 9px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        h1 {
            font-size: clamp(42px, 5vw, 68px);
            line-height: 1.04;
            letter-spacing: -2px;
            margin-bottom: 20px;
        }

        h1 span {
            color: #7652ff;
        }

        .hero-text {
            color: #858490;
            font-size: 14px;
            line-height: 1.8;
            max-width: 500px;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 12px;
        }

        .primary {
            background: linear-gradient(135deg, #6840ff, #805cff);
            color: white;
            padding: 13px 23px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 600;
            box-shadow: 0 10px 30px rgba(105, 65, 255, .25);
        }

        .secondary {
            border: 1px solid #292934;
            color: #b8b7c1;
            padding: 13px 23px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 600;
        }

        .secondary:hover {
            border-color: #704cff;
            color: white;
        }

        .features {
            position: absolute;
            right: 8%;
            width: 330px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .feature {
            background: #0d0d15;
            border: 1px solid #20202c;
            border-radius: 15px;
            padding: 22px;
        }

        .feature:nth-child(1) {
            grid-column: span 2;
        }

        .feature-icon {
            width: 35px;
            height: 35px;
            border-radius: 10px;
            background: rgba(112, 76, 255, .12);
            color: #805cff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 13px;
        }

        .feature h3 {
            font-size: 11px;
            margin-bottom: 6px;
        }

        .feature p {
            color: #666672;
            font-size: 8px;
            line-height: 1.6;
        }

        @media(max-width: 850px) {

            .navbar {
                padding: 0 20px;
            }

            .nav {
                gap: 12px;
            }

            .nav a:not(.login) {
                display: none;
            }

            .hero {
                padding: 50px 25px;
            }

            .features {
                display: none;
            }
        }
    </style>
</head>

<body>

<div class="home">

    <header class="navbar">

        <div class="logo">

            <div class="logo-icon">
                ✈
            </div>

            <div class="logo-name">
                Travel<span>Ease</span>
            </div>

        </div>

        <nav class="nav">

            <a href="{{ route('home') }}">
                Home
            </a>

            <a href="{{ route('packages.index') }}">
                Packages
            </a>

            <a href="{{ route('bookings.index') }}">
                Bookings
            </a>

            <a href="{{ route('admin.dashboard') }}" class="login">
                Admin
            </a>

        </nav>

    </header>


    <section class="hero">

        <div class="hero-content">

            <div class="small-title">
                Travel Agency Management
            </div>

            <h1>
                Explore the world.<br>
                <span>Travel with ease.</span>
            </h1>

            <p class="hero-text">
                Discover amazing destinations, manage travel packages,
                handle bookings and keep your entire travel business
                organized from one place.
            </p>

            <div class="buttons">

                <a href="{{ route('packages.index') }}" class="primary">
                    Explore Packages →
                </a>

                <a href="{{ route('admin.dashboard') }}" class="secondary">
                    View Dashboard
                </a>

            </div>

        </div>


        <div class="features">

            <div class="feature">

                <div class="feature-icon">
                    ✈
                </div>

                <h3>
                    Easy Travel Management
                </h3>

                <p>
                    Manage destinations, packages, customers,
                    bookings and payments from one professional system.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">
                    ◈
                </div>

                <h3>
                    Travel Packages
                </h3>

                <p>
                    Create and manage attractive travel packages.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">
                    ✓
                </div>

                <h3>
                    Easy Booking
                </h3>

                <p>
                    Keep bookings organized and accessible.
                </p>

            </div>

        </div>

    </section>

</div>

</body>
</html>