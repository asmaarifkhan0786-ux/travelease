<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Admin Dashboard - TravelEase')
    </title>


    {{-- Google Font --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


    <style>

        * {
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            margin: 0;

            font-family: 'Figtree', sans-serif;

            background: #090812;

            color: #f8f9ff;
        }


        a {
            text-decoration: none;

            color: inherit;
        }


        button,
        input,
        select,
        textarea {
            font-family: inherit;
        }


        /* ==========================================
           MAIN APP
        ========================================== */

        .app-layout {
            min-height: 100vh;

            width: 100%;
        }


        /* ==========================================
           TOP NAVIGATION
        ========================================== */

        .topbar {

            min-height: 76px;

            width: 100%;

            padding: 0 30px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 25px;

            background:
                linear-gradient(
                    90deg,
                    #15122a 0%,
                    #171331 50%,
                    #15122a 100%
                );

            border-bottom: 1px solid #292541;

            position: sticky;

            top: 0;

            z-index: 1000;
        }


        /* ==========================================
           LOGO
        ========================================== */

        .top-logo {

            display: flex;

            align-items: center;

            gap: 10px;

            min-width: 185px;

            flex-shrink: 0;
        }


        .top-logo-icon {

            width: 40px;

            height: 40px;

            border-radius: 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #805cf7,
                    #5144d8
                );

            color: white;

            font-size: 17px;

            box-shadow:
                0 8px 20px rgba(94, 70, 220, .25);
        }


        .top-logo-text strong {

            display: block;

            font-size: 18px;

            font-weight: 800;

            color: #ffffff;

            line-height: 1.1;
        }


        .top-logo-text span {

            display: block;

            margin-top: 3px;

            color: #7e7b96;

            font-size: 9px;

            letter-spacing: .3px;
        }


        /* ==========================================
           NAVIGATION
        ========================================== */

        .top-navigation {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 3px;

            flex: 1;

            min-width: 0;
        }


        .top-navigation a {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

            padding: 10px 13px;

            border-radius: 22px;

            color: #9290a8;

            font-size: 11px;

            font-weight: 600;

            white-space: nowrap;

            transition:
                background .2s ease,
                color .2s ease,
                transform .2s ease;
        }


        .top-navigation a i {

            font-size: 10px;
        }


        .top-navigation a:hover {

            color: #ffffff;

            background:
                rgba(128, 92, 247, .13);

            transform: translateY(-1px);
        }


        .top-navigation a.active {

            color: #ffffff;

            background: #090812;

            box-shadow:
                0 4px 15px rgba(0, 0, 0, .25);
        }


        /* ==========================================
           PROFILE
        ========================================== */

        .top-profile {

            min-width: 155px;

            display: flex;

            align-items: center;

            justify-content: flex-end;

            gap: 9px;

            flex-shrink: 0;
        }


        .profile-avatar {

            width: 40px;

            height: 40px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #ff9aab,
                    #725cff
                );

            color: #ffffff;

            font-size: 13px;

            font-weight: 800;

            box-shadow:
                0 5px 15px rgba(114, 92, 255, .2);
        }


        .profile-info strong {

            display: block;

            color: #ffffff;

            font-size: 11px;

            font-weight: 700;
        }


        .profile-info span {

            display: block;

            color: #77758c;

            font-size: 9px;

            margin-top: 3px;
        }


        /* ==========================================
           MAIN AREA
        ========================================== */

        .main-area {

            width: 100%;

            min-height: calc(100vh - 76px);

            margin-left: 0;
        }


        /* ==========================================
           CONTENT
        ========================================== */

        .content-area {

            width: 100%;

            min-height: calc(100vh - 76px);

            padding: 28px;

            background:

                radial-gradient(
                    circle at 85% 0%,
                    rgba(96, 68, 220, .12),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 15% 30%,
                    rgba(80, 58, 190, .06),
                    transparent 25%
                ),

                #090812;
        }


        /* ==========================================
           SUCCESS MESSAGE
        ========================================== */

        .alert-message {

            padding: 13px 16px;

            margin-bottom: 20px;

            border-radius: 10px;

            background:
                rgba(99, 217, 164, .12);

            color: #63d9a4;

            border:
                1px solid
                rgba(99, 217, 164, .25);
        }


        /* ==========================================
           ERROR MESSAGE
        ========================================== */

        .error-message {

            padding: 13px 16px;

            margin-bottom: 20px;

            border-radius: 10px;

            background:
                rgba(243, 35, 54, .12);

            color: #ff8b98;

            border:
                1px solid
                rgba(243, 35, 54, .25);
        }


        /* ==========================================
           MOBILE NAVIGATION BUTTON
        ========================================== */

        .mobile-menu {

            display: none;

            width: 38px;

            height: 38px;

            border-radius: 10px;

            border: 1px solid #302b49;

            background: #141229;

            color: #ffffff;

            cursor: pointer;
        }


        /* ==========================================
           RESPONSIVE
        ========================================== */

        @media (max-width: 1150px) {

            .top-navigation a {

                padding:
                    9px 9px;

                font-size: 10px;
            }


            .top-logo {

                min-width: 150px;
            }


            .top-profile {

                min-width: 125px;
            }

        }


        @media (max-width: 900px) {

            .topbar {

                padding:
                    12px 17px;

                flex-wrap: wrap;

                min-height: auto;
            }


            .top-logo {

                min-width: auto;
            }


            .top-profile {

                min-width: auto;
            }


            .top-profile .profile-info {

                display: none;
            }


            .top-navigation {

                order: 3;

                width: 100%;

                flex-basis: 100%;

                overflow-x: auto;

                justify-content: flex-start;

                padding-bottom: 2px;

                scrollbar-width: thin;
            }


            .top-navigation a {

                flex-shrink: 0;

                padding:
                    9px 12px;

                font-size: 10px;
            }


            .content-area {

                padding: 20px;
            }

        }


        @media (max-width: 520px) {

            .top-logo-text span {

                display: none;
            }


            .top-logo-text strong {

                font-size: 16px;
            }


            .profile-avatar {

                width: 36px;

                height: 36px;
            }


            .content-area {

                padding: 14px;
            }

        }

    </style>


    @stack('styles')

</head>


<body>


<div class="app-layout">


    {{-- ==================================================
         TOP NAVIGATION
    =================================================== --}}

    <header class="topbar">


        {{-- LOGO --}}

        <a
            href="{{ route('admin.dashboard') }}"
            class="top-logo"
        >

            <div class="top-logo-icon">

                <i class="fa-solid fa-earth-asia"></i>

            </div>


            <div class="top-logo-text">

                <strong>
                    TravelEase
                </strong>

                <span>
                    Travel Management
                </span>

            </div>

        </a>



        {{-- ==================================================
             NAVIGATION
        =================================================== --}}

        <nav class="top-navigation">


            {{-- DASHBOARD --}}

            <a
                href="{{ route('admin.dashboard') }}"
                class="{{ request()->routeIs('admin.dashboard') && !request()->has('page') ? 'active' : '' }}"
            >

                <i class="fa-solid fa-chart-pie"></i>

                Dashboard

            </a>



            {{-- DESTINATIONS --}}

            <a
                href="{{ route('admin.dashboard', ['page' => 'destinations']) }}"
                class="{{ request('page') === 'destinations' ? 'active' : '' }}"
            >

                <i class="fa-solid fa-location-dot"></i>

                Destinations

            </a>



            {{-- BOOKINGS --}}

            <a
                href="{{ route('admin.dashboard', ['page' => 'bookings']) }}"
                class="{{ request('page') === 'bookings' ? 'active' : '' }}"
            >

                <i class="fa-solid fa-calendar-check"></i>

                Bookings

            </a>



            {{-- CUSTOMERS --}}

            <a
                href="{{ route('admin.dashboard', ['page' => 'customers']) }}"
                class="{{ request('page') === 'customers' ? 'active' : '' }}"
            >

                <i class="fa-solid fa-users"></i>

                Customers

            </a>



            {{-- TOUR GUIDE --}}

            <a
                href="{{ route('admin.dashboard', ['page' => 'tour-guide']) }}"
                class="{{ request('page') === 'tour-guide' ? 'active' : '' }}"
            >

                <i class="fa-solid fa-person-walking-luggage"></i>

                Tour Guide

            </a>



            {{-- PAYMENTS --}}

            <a
                href="{{ route('admin.dashboard', ['page' => 'payments']) }}"
                class="{{ request('page') === 'payments' ? 'active' : '' }}"
            >

                <i class="fa-solid fa-wallet"></i>

                Payments

            </a>



            {{-- MESSAGES --}}

            <a
                href="{{ route('admin.dashboard', ['page' => 'messages']) }}"
                class="{{ request('page') === 'messages' ? 'active' : '' }}"
            >

                <i class="fa-regular fa-message"></i>

                Messages

            </a>



            {{-- SETTINGS --}}

            <a
                href="{{ route('admin.settings') }}"
                class="{{ request()->routeIs('admin.settings*') ? 'active' : '' }}"
            >

                <i class="fa-solid fa-gear"></i>

                Settings

            </a>


        </nav>



        {{-- ==================================================
             ADMIN PROFILE
        =================================================== --}}

        <div class="top-profile">


            <div class="profile-avatar">

                {{ strtoupper(
                    substr(
                        auth()->user()->name ?? 'A',
                        0,
                        1
                    )
                ) }}

            </div>


            <div class="profile-info">

                <strong>
                    {{ auth()->user()->name ?? 'Admin' }}
                </strong>

                <span>
                    Administrator
                </span>

            </div>


        </div>


    </header>



    {{-- ==================================================
         MAIN CONTENT
    =================================================== --}}

    <div class="main-area">


        <main class="content-area">


            {{-- SUCCESS MESSAGE --}}

            @if (session('success'))

                <div class="alert-message">

                    <i class="fa-solid fa-circle-check"></i>

                    {{ session('success') }}

                </div>

            @endif



            {{-- ERRORS --}}

            @if ($errors->any())

                <div class="error-message">

                    @foreach ($errors->all() as $error)

                        <div>
                            {{ $error }}
                        </div>

                    @endforeach

                </div>

            @endif



            {{-- PAGE CONTENT --}}

            @yield('content')


        </main>


    </div>


</div>


@stack('scripts')


</body>

</html>