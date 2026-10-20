<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking Confirmed - TravelEase</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #f5f6fa;
            font-family: 'Figtree', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
            color: #171b35;
        }

        .card {
            background: white;
            max-width: 600px;
            width: 100%;
            padding: 45px;
            text-align: center;
            border-radius: 20px;
            border: 1px solid #e4e6ed;
            box-shadow: 0 15px 40px rgba(20,25,50,.08);
        }

        .success-icon {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: #e9f8ef;
            color: #20a35a;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 22px;
            font-size: 32px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 12px;
        }

        .intro {
            color: #747b8f;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .summary {
            text-align: left;
            background: #f7f7fb;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            padding: 9px 0;
            border-bottom: 1px solid #e7e8ef;
            font-size: 14px;
        }

        .row:last-child {
            border-bottom: none;
        }

        .row span:first-child {
            color: #7b8193;
        }

        .row span:last-child {
            font-weight: 600;
        }

        .btn {
            display: inline-block;
            background: #7657e8;
            color: white;
            padding: 13px 24px;
            border-radius: 9px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn:hover {
            background: #6646d5;
        }

    </style>

</head>


<body>


<div class="card">


    <div class="success-icon">

        <i class="fa-solid fa-check"></i>

    </div>


    <h1>Booking Confirmed</h1>


    <p class="intro">

        Your booking has been submitted successfully and your payment
        information has been received.

    </p>


    <div class="summary">


        <div class="row">

            <span>Customer</span>

            <span>
                {{ $booking['customer_name'] }}
            </span>

        </div>


        <div class="row">

            <span>Destination</span>

            <span>
                {{ $booking['destination'] }}
            </span>

        </div>


        <div class="row">

            <span>Travel Date</span>

            <span>
                {{ $booking['travel_date'] }}
            </span>

        </div>


        <div class="row">

            <span>Persons</span>

            <span>
                {{ $booking['persons'] }}
            </span>

        </div>


        <div class="row">

            <span>Payment</span>

            <span>
                {{ $payment['payment_method'] }}
            </span>

        </div>


        <div class="row">

            <span>Status</span>

            <span style="color:#20a35a;">
                Paid
            </span>

        </div>


    </div>


    <a href="{{ route('home') }}" class="btn">

        <i class="fa-solid fa-house"></i>

        Back to TravelEase

    </a>


</div>


</body>
</html>