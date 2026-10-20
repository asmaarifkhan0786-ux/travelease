<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book Your Trip - TravelEase</title>

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
            color: #ffffff;
            min-height: 100vh;
        }

        .page {
            min-height: 100vh;
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
            text-decoration: none;
            color: white;
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
            gap: 28px;
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

        .container {
            width: min(850px, 92%);
            margin: 0 auto;
            padding: 55px 0 70px;
        }

        .back {
            color: #a99cff;
            text-decoration: none;
            font-size: 13px;
        }

        .back:hover {
            color: white;
        }

        .heading {
            margin: 20px 0 30px;
        }

        .heading h1 {
            font-size: 38px;
            line-height: 1.1;
            margin-bottom: 10px;
            letter-spacing: -1px;
        }

        .heading p {
            color: #858490;
            font-size: 14px;
            line-height: 1.7;
        }

        .success {
            background: #123b30;
            color: #9cf0c9;
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .errors {
            background: #451b29;
            color: #ffc2ce;
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .errors ul {
            margin: 8px 0 0 18px;
        }

        .form-card {
            background: #0d0d15;
            border: 1px solid #20202c;
            border-radius: 18px;
            padding: 30px;
        }

        .form-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .form-description {
            color: #666672;
            font-size: 12px;
            margin-bottom: 28px;
        }

        .field {
            margin-bottom: 22px;
        }

        .field label {
            display: block;
            margin-bottom: 9px;
            color: #e5e5ee;
            font-size: 12px;
            font-weight: 600;
        }

        .field input {
            width: 100%;
            padding: 14px 15px;
            border-radius: 10px;
            border: 1px solid #292934;
            background: #08080f;
            color: white;
            outline: none;
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            transition: .2s;
        }

        .field input:focus {
            border-color: #7652ff;
            box-shadow: 0 0 0 3px rgba(118, 82, 255, .10);
        }

        .field input::placeholder {
            color: #555563;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 28px;
            flex-wrap: wrap;
        }

        .submit-btn {
            border: 0;
            background: linear-gradient(135deg, #6840ff, #805cff);
            color: white;
            padding: 13px 25px;
            border-radius: 25px;
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(105, 65, 255, .20);
        }

        .submit-btn:hover {
            transform: translateY(-1px);
        }

        .cancel-btn {
            border: 1px solid #292934;
            color: #b8b7c1;
            padding: 13px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
        }

        .cancel-btn:hover {
            border-color: #704cff;
            color: white;
        }

        .footer-note {
            text-align: center;
            color: #555563;
            font-size: 11px;
            margin-top: 25px;
        }

        @media(max-width: 650px) {
            .navbar {
                padding: 0 20px;
            }

            .nav {
                gap: 14px;
            }

            .nav a:not(:last-child) {
                display: none;
            }

            .container {
                padding-top: 35px;
            }

            .heading h1 {
                font-size: 30px;
            }

            .form-card {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <header class="navbar">

        <a href="{{ route('home') }}" class="logo">

            <div class="logo-icon">
                ✈
            </div>

            <div class="logo-name">
                Travel<span>Ease</span>
            </div>

        </a>

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

        </nav>

    </header>


    <main class="container">

        <a href="{{ route('home') }}" class="back">
            ← Back to Home
        </a>

        <div class="heading">

            <h1>
                Book Your Trip
            </h1>

            <p>
                Tell us about your travel plans and submit your booking request.
                We'll take care of the rest.
            </p>

        </div>


        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif


        @if($errors->any())
            <div class="errors">

                <strong>Please correct the following:</strong>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif


        <div class="form-card">

            <div class="form-title">
                Travel Booking Details
            </div>

            <div class="form-description">
                Enter your information below to continue with your booking.
            </div>


            <form action="{{ route('bookings.store') }}" method="POST">

                @csrf


                <div class="field">

                    <label for="customer_name">
                        Customer Name
                    </label>

                    <input
                        type="text"
                        id="customer_name"
                        name="customer_name"
                        value="{{ old('customer_name') }}"
                        placeholder="Enter your full name"
                        required
                    >

                </div>


                <div class="field">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email address"
                        required
                    >

                </div>


                <div class="field">

                    <label for="package_name">
                        Travel Package
                    </label>

                    <input
                        type="text"
                        id="package_name"
                        name="package_name"
                        value="{{ old('package_name') }}"
                        placeholder="e.g. Northern Areas Tour"
                        required
                    >

                </div>


                <div class="buttons">

                    <button type="submit" class="submit-btn">
                        Continue with Booking →
                    </button>

                    <a href="{{ route('home') }}" class="cancel-btn">
                        Cancel
                    </a>

                </div>

            </form>

        </div>


        <div class="footer-note">
            TravelEase · Travel Management
        </div>

    </main>

</div>

</body>
</html>