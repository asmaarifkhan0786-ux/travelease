<style>

    .destination-page {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 10px 0 40px;
        color: #ffffff;
    }

    /* ==============================
       TOP SEARCH
    ============================== */

    .destination-topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 28px;
    }

    .destination-search {
        flex: 1;
        max-width: 600px;
        position: relative;
    }

    .destination-search input {
        width: 100%;
        height: 48px;
        padding: 0 125px 0 45px;
        border: 1px solid #292943;
        border-radius: 14px;
        outline: none;
        background: #121223;
        color: #ffffff;
        font-size: 13px;
        box-sizing: border-box;
    }

    .destination-search input::placeholder {
        color: #77778e;
    }

    .destination-search i {
        position: absolute;
        left: 17px;
        top: 17px;
        color: #77778e;
        font-size: 14px;
    }

    .search-btn {
        position: absolute;
        right: 5px;
        top: 5px;
        height: 38px;
        padding: 0 22px;
        border: none;
        border-radius: 10px;
        background: #b8e63b;
        color: #15151e;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
    }

    .search-btn:hover {
        background: #d0f45c;
    }

    .destination-user {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .notification-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 1px solid #292943;
        background: #121223;
        color: #aaaabd;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .user-avatar {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: linear-gradient(
            135deg,
            #ff8b9e,
            #7d5cff
        );
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: white;
    }

    .user-info strong {
        display: block;
        font-size: 12px;
        color: #ffffff;
    }

    .user-info span {
        display: block;
        margin-top: 3px;
        color: #77778e;
        font-size: 10px;
    }


    /* ==============================
       GREETING
    ============================== */

    .destination-welcome {
        margin-bottom: 25px;
    }

    .destination-welcome h1 {
        margin: 0 0 7px;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: -0.5px;
    }

    .destination-welcome p {
        margin: 0;
        color: #85859b;
        font-size: 13px;
    }


    /* ==============================
       MAIN GRID
    ============================== */

    .destination-grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 300px;
        gap: 20px;
        align-items: start;
    }


    /* ==============================
       SECTION HEADER
    ============================== */

    .destination-section {
        margin-bottom: 30px;
    }

    .destination-section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .destination-section-header h2 {
        margin: 0;
        font-size: 16px;
        font-weight: 700;
    }

    .destination-section-header a {
        color: #b8e63b;
        font-size: 11px;
        text-decoration: none;
    }


    /* ==============================
       EASY VISA DESTINATIONS
    ============================== */

    .visa-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
    }

    .visa-card {
        overflow: hidden;
        border: 1px solid #25253b;
        border-radius: 16px;
        background: #121223;
        transition: .25s ease;
    }

    .visa-card:hover {
        transform: translateY(-4px);
        border-color: #6955df;
        box-shadow: 0 12px 30px rgba(105, 85, 223, 0.12);
    }

    .visa-image {
        width: 100%;
        height: 145px;
        object-fit: cover;
        display: block;
    }

    .visa-content {
        padding: 13px;
    }

    .visa-content h3 {
        margin: 0 0 6px;
        font-size: 13px;
    }

    .visa-location {
        color: #85859b;
        font-size: 10px;
        margin-bottom: 12px;
    }

    .visa-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .visa-bottom span {
        color: #b8e63b;
        font-size: 10px;
    }

    .visa-price {
        font-size: 12px;
        font-weight: 700;
        color: #ffffff !important;
    }


    /* ==============================
       MOST POPULAR
    ============================== */

    .popular-tabs {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
        border-bottom: 1px solid #24243a;
        padding-bottom: 10px;
    }

    .popular-tabs span {
        color: #77778e;
        font-size: 11px;
        cursor: pointer;
    }

    .popular-tabs span.active {
        color: #ffffff;
        font-weight: 600;
    }

    .popular-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }

    .popular-card {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px;
        border: 1px solid #24243a;
        border-radius: 13px;
        background: #111121;
        transition: .25s ease;
    }

    .popular-card:hover {
        border-color: #6955df;
        transform: translateY(-2px);
    }

    .popular-card img {
        width: 65px;
        height: 58px;
        object-fit: cover;
        border-radius: 10px;
        flex-shrink: 0;
    }

    .popular-info {
        flex: 1;
    }

    .popular-info h3 {
        margin: 0 0 5px;
        font-size: 11px;
        color: #ffffff;
    }

    .popular-info p {
        margin: 0 0 5px;
        color: #77778e;
        font-size: 9px;
    }

    .popular-info strong {
        color: #b8e63b;
        font-size: 10px;
    }


    /* ==============================
       RIGHT SIDE
    ============================== */

    .right-column {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .destination-panel {
        background: #121223;
        border: 1px solid #28283e;
        border-radius: 17px;
        padding: 17px;
    }

    .destination-panel-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
    }

    .destination-panel-header h3 {
        margin: 0;
        font-size: 14px;
    }

    .destination-panel-header a {
        color: #b8e63b;
        font-size: 9px;
        text-decoration: none;
    }


    /* ==============================
       CALENDAR
    ============================== */

    .calendar-title {
        text-align: center;
        font-size: 11px;
        margin-bottom: 15px;
        color: #cfcfe0;
    }

    .calendar-days,
    .calendar-dates {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 7px;
        text-align: center;
    }

    .calendar-days span {
        color: #6f6f86;
        font-size: 8px;
    }

    .calendar-dates span {
        width: 27px;
        height: 27px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 9px;
        color: #b4b4c5;
    }

    .calendar-dates span.active {
        background: #b8e63b;
        color: #11111b;
        font-weight: 700;
    }

    .calendar-dates span.booking-day {
        background: #2b2940;
        color: #ffffff;
    }


    /* ==============================
       BOOKINGS
    ============================== */

    .mini-booking {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 9px 0;
        border-bottom: 1px solid #24243a;
    }

    .mini-booking:last-child {
        border-bottom: none;
    }

    .mini-booking img {
        width: 48px;
        height: 42px;
        border-radius: 8px;
        object-fit: cover;
        flex-shrink: 0;
    }

    .mini-booking-info {
        flex: 1;
    }

    .mini-booking-info strong {
        display: block;
        font-size: 10px;
        margin-bottom: 4px;
    }

    .mini-booking-info span {
        display: block;
        color: #77778e;
        font-size: 8px;
    }

    .booking-status {
        font-size: 8px;
        color: #b8e63b;
    }


    /* ==============================
       DISCOUNT CARD
    ============================== */

    .discount-card {
        padding: 20px;
        min-height: 120px;
        border-radius: 17px;
        background: linear-gradient(
            135deg,
            #dfff6d,
            #b8e63b
        );
        color: #15151e;
        position: relative;
        overflow: hidden;
    }

    .discount-card h3 {
        margin: 0 0 7px;
        font-size: 18px;
    }

    .discount-card p {
        margin: 0;
        max-width: 190px;
        font-size: 10px;
        line-height: 1.5;
    }

    .discount-arrow {
        margin-top: 15px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* ==============================
       SEARCH NO RESULT
    ============================== */

    .no-destination-result {
        display: none;
        grid-column: 1 / -1;
        padding: 35px 20px;
        text-align: center;
        color: #77778e;
        border: 1px solid #25253b;
        border-radius: 14px;
        background: #121223;
    }

    .no-destination-result i {
        font-size: 25px;
        margin-bottom: 10px;
        color: #b8e63b;
    }


    /* ==============================
       RESPONSIVE
    ============================== */

    @media (max-width: 1050px) {

        .destination-grid {
            grid-template-columns: 1fr;
        }

        .right-column {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

    }


    @media (max-width: 750px) {

        .destination-topbar {
            flex-direction: column;
            align-items: stretch;
        }

        .destination-search {
            max-width: none;
        }

        .destination-user {
            justify-content: flex-end;
        }

        .visa-grid {
            grid-template-columns: 1fr;
        }

        .popular-grid {
            grid-template-columns: 1fr;
        }

        .right-column {
            display: flex;
        }

        .destination-welcome h1 {
            font-size: 23px;
        }

    }

</style>


<div class="destination-page">


    {{-- ==========================================
         SEARCH + USER
    =========================================== --}}

    <div class="destination-topbar">

        <div class="destination-search">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input
                type="text"
                id="destinationSearch"
                placeholder="Search for your favorite destination"
            >

            <button
                type="button"
                class="search-btn"
                onclick="searchDestinations()"
            >
                Search
            </button>

        </div>


        <div class="destination-user">

            <div class="notification-btn">
                <i class="fa-regular fa-bell"></i>
            </div>

            <div class="user-avatar">
                A
            </div>

            <div class="user-info">

                <strong>
                    Admin
                </strong>

                <span>
                    Administrator
                </span>

            </div>

        </div>

    </div>



    {{-- ==========================================
         WELCOME
    =========================================== --}}

    <div class="destination-welcome">

        <h1>
            Hello Admin! 👋
        </h1>

        <p>
            Welcome back. Discover beautiful destinations and manage your travel packages with ease.
        </p>

    </div>



    <div class="destination-grid">


        {{-- ==========================================
             LEFT CONTENT
        =========================================== --}}

        <div>


            {{-- ==========================================
                 EASY VISA DESTINATIONS
            =========================================== --}}

            <section class="destination-section">

                <div class="destination-section-header">

                    <h2>
                        Easy Visa Destinations
                    </h2>

                    <a href="#">
                        View All
                    </a>

                </div>


                <div class="visa-grid">


                    {{-- DUBAI --}}

                    <div class="visa-card destination-item">

                        <img
                            class="visa-image"
                            src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=900&q=85"
                            alt="Dubai"
                        >

                        <div class="visa-content">

                            <h3>
                                Dubai
                            </h3>

                            <div class="visa-location">
                                United Arab Emirates
                            </div>

                            <div class="visa-bottom">

                                <span>
                                    Starting at
                                </span>

                                <span class="visa-price">
                                    Rs. 21,700
                                </span>

                            </div>

                        </div>

                    </div>



                    {{-- ISTANBUL TURKEY --}}

                    <div class="visa-card destination-item">

                        <img
                            class="visa-image"
                            src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=900&q=85"
                            alt="Istanbul Turkey"
                        >

                        <div class="visa-content">

                            <h3>
                                Istanbul
                            </h3>

                            <div class="visa-location">
                                Turkey
                            </div>

                            <div class="visa-bottom">

                                <span>
                                    Starting at
                                </span>

                                <span class="visa-price">
                                    Rs. 42,500
                                </span>

                            </div>

                        </div>

                    </div>



                    {{-- MALDIVES --}}

                    <div class="visa-card destination-item">

                        <img
                            class="visa-image"
                            src="https://images.unsplash.com/photo-1514282401047-d79a71a590e8?auto=format&fit=crop&w=900&q=85"
                            alt="Maldives"
                        >

                        <div class="visa-content">

                            <h3>
                                Maldives
                            </h3>

                            <div class="visa-location">
                                Maldives
                            </div>

                            <div class="visa-bottom">

                                <span>
                                    Starting at
                                </span>

                                <span class="visa-price">
                                    Rs. 65,900
                                </span>

                            </div>

                        </div>

                    </div>


                </div>

            </section>



            {{-- ==========================================
                 MOST POPULAR
            =========================================== --}}

            <section class="destination-section">

                <div class="destination-section-header">

                    <h2>
                        Most Popular
                    </h2>

                </div>


                <div class="popular-tabs">

                    <span class="active">
                        Most Popular
                    </span>

                    <span>
                        Special Offers
                    </span>

                    <span>
                        Near Me
                    </span>

                </div>


                <div class="popular-grid">


                    {{-- HUNZA --}}

                    <div class="popular-card destination-item">

                        <img
                            src="https://images.unsplash.com/photo-1593693397690-362cb9666fc2?auto=format&fit=crop&w=600&q=85"
                            alt="Hunza Valley"
                        >

                        <div class="popular-info">

                            <h3>
                                Hunza Valley
                            </h3>

                            <p>
                                Pakistan · 4.9 ★
                            </p>

                            <strong>
                                Rs. 8,500 / day
                            </strong>

                        </div>

                    </div>



                    {{-- ISTANBUL --}}

                    <div class="popular-card destination-item">

                        <img
                            src="https://images.unsplash.com/photo-1541432901042-2d8a0d4f0f7b?auto=format&fit=crop&w=600&q=85"
                            alt="Istanbul Turkey"
                        >

                        <div class="popular-info">

                            <h3>
                                Istanbul
                            </h3>

                            <p>
                                Turkey · 4.9 ★
                            </p>

                            <strong>
                                Rs. 18,500 / day
                            </strong>

                        </div>

                    </div>



                    {{-- DUBAI --}}

                    <div class="popular-card destination-item">

                        <img
                            src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=600&q=85"
                            alt="Dubai"
                        >

                        <div class="popular-info">

                            <h3>
                                Dubai City Tour
                            </h3>

                            <p>
                                UAE · 4.8 ★
                            </p>

                            <strong>
                                Rs. 15,500 / day
                            </strong>

                        </div>

                    </div>



                    {{-- EIFFEL TOWER --}}

                    <div class="popular-card destination-item">

                        <img
                            src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=600&q=85"
                            alt="Paris Eiffel Tower"
                        >

                        <div class="popular-info">

                            <h3>
                                Eiffel Tower Tour
                            </h3>

                            <p>
                                France · 4.9 ★
                            </p>

                            <strong>
                                Rs. 28,500 / day
                            </strong>

                        </div>

                    </div>



                    {{-- KASHMIR --}}

                    <div class="popular-card destination-item">

                        <img
                            src="https://images.unsplash.com/photo-1598091383021-15ddea10925d?auto=format&fit=crop&w=600&q=85"
                            alt="Kashmir"
                        >

                        <div class="popular-info">

                            <h3>
                                Kashmir
                            </h3>

                            <p>
                                Pakistan · 4.9 ★
                            </p>

                            <strong>
                                Rs. 7,800 / day
                            </strong>

                        </div>

                    </div>



                    {{-- BALI --}}

                    <div class="popular-card destination-item">

                        <img
                            src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=600&q=85"
                            alt="Bali"
                        >

                        <div class="popular-info">

                            <h3>
                                Bali
                            </h3>

                            <p>
                                Indonesia · 4.8 ★
                            </p>

                            <strong>
                                Rs. 22,500 / day
                            </strong>

                        </div>

                    </div>


                </div>

            </section>


        </div>



        {{-- ==========================================
             RIGHT COLUMN
        =========================================== --}}

        <div class="right-column">


            {{-- ==========================================
                 CALENDAR
            =========================================== --}}

            <div class="destination-panel">

                <div class="destination-panel-header">

                    <h3>
                        Booking Calendar
                    </h3>

                    <a href="#">
                        View All
                    </a>

                </div>


                <div class="calendar-title">
                    October 2026
                </div>


                <div class="calendar-days">

                    <span>S</span>
                    <span>M</span>
                    <span>T</span>
                    <span>W</span>
                    <span>T</span>
                    <span>F</span>
                    <span>S</span>

                </div>


                <div class="calendar-dates">

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                    <span>1</span>
                    <span>2</span>
                    <span>3</span>

                    <span>4</span>
                    <span>5</span>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                    <span>10</span>

                    <span>11</span>
                    <span>12</span>
                    <span>13</span>
                    <span>14</span>
                    <span>15</span>
                    <span class="booking-day">16</span>
                    <span>17</span>

                    <span>18</span>
                    <span class="active">19</span>
                    <span>20</span>
                    <span>21</span>
                    <span class="booking-day">22</span>
                    <span>23</span>
                    <span>24</span>

                    <span>25</span>
                    <span>26</span>
                    <span>27</span>
                    <span>28</span>
                    <span>29</span>
                    <span>30</span>
                    <span>31</span>

                </div>

            </div>



            {{-- ==========================================
                 UPCOMING BOOKINGS
            =========================================== --}}

            <div class="destination-panel">

                <div class="destination-panel-header">

                    <h3>
                        Bookings
                    </h3>

                    <a href="#">
                        View All
                    </a>

                </div>


                {{-- DUBAI BOOKING --}}

                <div class="mini-booking">

                    <img
                        src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=400&q=85"
                        alt="Dubai"
                    >

                    <div class="mini-booking-info">

                        <strong>
                            Dubai
                        </strong>

                        <span>
                            18 Oct · 2 Days
                        </span>

                    </div>

                    <span class="booking-status">
                        Confirmed
                    </span>

                </div>



                {{-- HUNZA BOOKING --}}

                <div class="mini-booking">

                    <img
                        src="https://images.unsplash.com/photo-1593693397690-362cb9666fc2?auto=format&fit=crop&w=400&q=85"
                        alt="Hunza Valley"
                    >

                    <div class="mini-booking-info">

                        <strong>
                            Hunza Valley
                        </strong>

                        <span>
                            22 Oct · 4 Days
                        </span>

                    </div>

                    <span class="booking-status">
                        Confirmed
                    </span>

                </div>



                {{-- ISTANBUL BOOKING --}}

                <div class="mini-booking">

                    <img
                        src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=400&q=85"
                        alt="Istanbul Turkey"
                    >

                    <div class="mini-booking-info">

                        <strong>
                            Istanbul
                        </strong>

                        <span>
                            27 Oct · 3 Days
                        </span>

                    </div>

                    <span class="booking-status">
                        Pending
                    </span>

                </div>



                {{-- MALDIVES BOOKING --}}

                <div class="mini-booking">

                    <img
                        src="https://images.unsplash.com/photo-1514282401047-d79a71a590e8?auto=format&fit=crop&w=400&q=85"
                        alt="Maldives"
                    >

                    <div class="mini-booking-info">

                        <strong>
                            Maldives
                        </strong>

                        <span>
                            01 Nov · 5 Days
                        </span>

                    </div>

                    <span class="booking-status">
                        Confirmed
                    </span>

                </div>

            </div>



            {{-- ==========================================
                 DISCOUNT
            =========================================== --}}

            <div class="discount-card">

                <h3>
                    50% Discount!
                </h3>

                <p>
                    Get a discount on selected destinations and don't miss this special travel offer.
                </p>

                <div class="discount-arrow">

                    <i class="fa-solid fa-arrow-right"></i>

                </div>

            </div>


        </div>

    </div>

</div>



<script>

    function searchDestinations() {

        const inputElement =
            document.getElementById('destinationSearch');

        if (!inputElement) {
            return;
        }

        const input =
            inputElement.value.toLowerCase().trim();

        const cards =
            document.querySelectorAll(
                '.destination-item'
            );

        cards.forEach(function(card) {

            const text =
                card.innerText.toLowerCase();

            if (
                input === '' ||
                text.includes(input)
            ) {

                card.style.display = '';

            } else {

                card.style.display = 'none';

            }

        });

    }


    const destinationSearch =
        document.getElementById(
            'destinationSearch'
        );


    if (destinationSearch) {

        destinationSearch.addEventListener(
            'keyup',
            function(event) {

                if (event.key === 'Enter') {

                    searchDestinations();

                }

            }
        );

    }

</script>