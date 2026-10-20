@extends('layouts.app')

@section('content')
<div style="color:#f8f9ff;">

    <div style="display:flex; justify-content:space-between; align-items:center; gap:16px; flex-wrap:wrap; margin-bottom:28px;">
        <div>
            <p style="color:#a99bff; font-size:12px; letter-spacing:2px; margin:0 0 8px;">
                TRAVEL MANAGEMENT
            </p>
            <h1 style="font-size:28px; margin:0 0 8px; font-weight:700;">
                Travel Packages
            </h1>
            <p style="color:#9ba4bd; margin:0;">
                Explore destinations and choose your next journey.
            </p>
        </div>

        <a href="{{ route('admin.packages.create') }}"
           style="background:linear-gradient(135deg,#805cf7,#5144d8); color:white; text-decoration:none; padding:13px 20px; border-radius:10px; font-weight:600;">
            + Add Package
        </a>
    </div>

    @if(session('success'))
        <div style="background:#123b30; color:#9cf0c9; padding:14px 18px; border-radius:12px; margin-bottom:20px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:20px;">

        <div style="background:#111629; border:1px solid #252c43; border-radius:18px; overflow:hidden;">
            <div style="height:150px; background:linear-gradient(135deg,#164e63,#312e81); display:flex; align-items:center; justify-content:center; font-size:55px;">🏔️</div>
            <div style="padding:22px;">
                <span style="font-size:11px; color:#b9aaff; background:#292044; padding:6px 10px; border-radius:20px;">ADVENTURE</span>
                <h3 style="margin:16px 0 8px; font-size:20px;">Northern Areas Escape</h3>
                <p style="color:#9ba4bd; font-size:14px; line-height:1.7;">Discover the mountains, scenic valleys and refreshing landscapes of northern Pakistan.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; gap:10px; margin-top:20px;">
                    <div>
                        <div style="color:#9ba4bd; font-size:12px;">Starting from</div>
                        <strong style="font-size:19px; color:#c3b5ff;">PKR 25,000</strong>
                    </div>
                    <a href="{{ route('bookings.create', ['package_name' => 'Northern Areas Escape']) }}"
                       style="background:linear-gradient(135deg,#805cf7,#5144d8); color:white; padding:11px 14px; border-radius:9px; text-decoration:none; font-size:13px; font-weight:600;">Book Now</a>
                </div>
            </div>
        </div>

        <div style="background:#111629; border:1px solid #252c43; border-radius:18px; overflow:hidden;">
            <div style="height:150px; background:linear-gradient(135deg,#0f766e,#164e63); display:flex; align-items:center; justify-content:center; font-size:55px;">🌊</div>
            <div style="padding:22px;">
                <span style="font-size:11px; color:#9ee8df; background:#123b3b; padding:6px 10px; border-radius:20px;">RELAXATION</span>
                <h3 style="margin:16px 0 8px; font-size:20px;">Coastal Getaway</h3>
                <p style="color:#9ba4bd; font-size:14px; line-height:1.7;">Enjoy a relaxing escape with coastal views, peaceful surroundings and memorable experiences.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; gap:10px; margin-top:20px;">
                    <div>
                        <div style="color:#9ba4bd; font-size:12px;">Starting from</div>
                        <strong style="font-size:19px; color:#9ee8df;">PKR 18,000</strong>
                    </div>
                    <a href="{{ route('bookings.create', ['package_name' => 'Coastal Getaway']) }}"
                       style="background:linear-gradient(135deg,#805cf7,#5144d8); color:white; padding:11px 14px; border-radius:9px; text-decoration:none; font-size:13px; font-weight:600;">Book Now</a>
                </div>
            </div>
        </div>

        <div style="background:#111629; border:1px solid #252c43; border-radius:18px; overflow:hidden;">
            <div style="height:150px; background:linear-gradient(135deg,#92400e,#7c2d12); display:flex; align-items:center; justify-content:center; font-size:55px;">🏜️</div>
            <div style="padding:22px;">
                <span style="font-size:11px; color:#ffd4a3; background:#402719; padding:6px 10px; border-radius:20px;">CULTURAL TOUR</span>
                <h3 style="margin:16px 0 8px; font-size:20px;">Heritage Discovery</h3>
                <p style="color:#9ba4bd; font-size:14px; line-height:1.7;">Explore historic landmarks, local traditions and the cultural beauty of Pakistan.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; gap:10px; margin-top:20px;">
                    <div>
                        <div style="color:#9ba4bd; font-size:12px;">Starting from</div>
                        <strong style="font-size:19px; color:#ffd4a3;">PKR 15,000</strong>
                    </div>
                    <a href="{{ route('bookings.create', ['package_name' => 'Heritage Discovery']) }}"
                       style="background:linear-gradient(135deg,#805cf7,#5144d8); color:white; padding:11px 14px; border-radius:9px; text-decoration:none; font-size:13px; font-weight:600;">Book Now</a>
                </div>
            </div>
        </div>

    </div>

    <p style="color:#7f89a4; font-size:12px; margin-top:22px;">
        Package examples for display. Prices and package details should be confirmed before booking.
    </p>

</div>
@endsection