
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TravelEase | Management Dashboard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>
<style>
:root{--bg:#07060d;--panel:#0d0b15;--panel2:#12101c;--border:#272333;--purple:#805cf7;--light:#a98cff;--text:#f8f7fc;--muted:#8b8599;--green:#60dda5;--orange:#ffbd65;--red:#ff7283}
*{margin:0;padding:0;box-sizing:border-box}
body{background:var(--bg);color:var(--text);font-family:Inter,Arial,sans-serif;font-size:13px}
a{text-decoration:none;color:inherit}button,input,select,textarea{font:inherit}
.top-navbar{min-height:72px;display:flex;align-items:center;gap:24px;padding:0 4%;background:#090811;border-bottom:1px solid #201c2b;position:sticky;top:0;z-index:20}
.logo-area{display:flex;align-items:center;gap:10px;flex-shrink:0}
.logo-icon{width:36px;height:36px;border-radius:12px;display:grid;place-items:center;background:linear-gradient(135deg,#805cf7,#5632cf)}
.logo-text{font-size:18px;font-weight:800}.logo-text span{color:var(--light)}
.main-nav{display:flex;align-items:center;justify-content:center;flex:1;gap:3px}
.main-nav a{color:var(--muted);font-size:11px;padding:11px 10px;border-radius:9px;white-space:nowrap}
.main-nav a:hover,.main-nav a.active{background:#1b1728;color:white}.main-nav a.active{box-shadow:inset 0 -2px var(--purple)}
.nav-right{display:flex;align-items:center;gap:16px;color:var(--muted)}
.profile{display:flex;align-items:center;gap:9px}.profile-image,.avatar{display:grid;place-items:center;background:linear-gradient(135deg,#b49bff,#5634c9);color:white;font-weight:800}
.profile-image{width:35px;height:35px;border-radius:50%}.profile-info strong,.profile-info small{display:block}.profile-info strong{font-size:11px}.profile-info small{margin-top:4px;color:var(--muted);font-size:9px}
.hero{padding:34px 4% 85px;background:radial-gradient(circle at 80% 0%,#ffffff17,transparent 25%),linear-gradient(120deg,#5734d7,#754af7 55%,#5635ce)}
.hero-content{max-width:1500px;margin:auto;display:flex;align-items:center;justify-content:space-between;gap:20px}
.welcome h1{font-size:27px;margin-bottom:9px}.welcome p{color:#e2d9ff;font-size:12px;line-height:1.7}
.hero-actions,.page-actions{display:flex;gap:10px;flex-wrap:wrap}
.month-button,.download-button{padding:11px 16px;border-radius:9px;font-size:11px;color:white}
.month-button{border:1px solid #ffffff55;background:#ffffff13}.download-button{display:inline-flex;gap:8px;background:#100d1b}
.stats-container{max-width:1500px;margin:-52px auto 0;padding:0 4%;position:relative;z-index:2}
.stats{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:15px}
.stat-card,.panel,.summary-card,.mini-card,.guide-card,.destination-card,.message-card,.settings-card{background:var(--panel);border:1px solid var(--border);border-radius:14px}
.stat-card{padding:19px;min-width:0}.stat-top{display:flex;align-items:center;justify-content:space-between;gap:10px}
.stat-title,.summary-top{color:#aaa4b7;font-size:11px}
.stat-icon,.mini-card-icon{width:36px;height:36px;border-radius:11px;display:grid;place-items:center;color:var(--light);background:#805cf71c}
.stat-number{margin-top:15px;font-size:26px;font-weight:800}.stat-description{margin-top:7px;color:var(--muted);font-size:10px}.up{color:var(--green)}
.progress{height:4px;background:#292435;border-radius:10px;overflow:hidden;margin-top:15px}.progress span{display:block;height:100%;background:linear-gradient(90deg,#7045ed,#b19aff)}
.main-content,.page-content{max-width:1500px;margin:auto;padding:25px 4% 40px}
.main-grid{display:grid;grid-template-columns:minmax(0,1.55fr) minmax(270px,.85fr);gap:16px}
.panel{min-width:0;padding:20px;margin-bottom:17px}
.panel-header,.page-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:18px}
.panel-title h2{font-size:14px;margin-bottom:6px}.panel-title p,.page-header p{font-size:10px;color:var(--muted);line-height:1.7}
.chart-container{height:260px;position:relative}
.calendar-header{display:flex;justify-content:space-between;align-items:center;margin:18px 0 15px}
.calendar-buttons{display:flex;gap:6px}.calendar-buttons button{width:28px;height:28px;border-radius:7px;color:white;background:var(--panel2);border:1px solid var(--border);cursor:pointer}
.calendar{display:grid;grid-template-columns:repeat(7,1fr);gap:5px}.weekday{text-align:center;color:var(--muted);font-size:9px;padding:7px 0}
.day{min-height:31px;display:grid;place-items:center;position:relative;border-radius:7px;color:#c5bfd2;font-size:10px}
.day.muted{color:#494353}.day.event:after{content:"";position:absolute;bottom:3px;width:4px;height:4px;border-radius:50%;background:var(--light)}.day.today{background:var(--purple);color:white}
.booking-list{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px}
.booking{display:flex;align-items:center;gap:11px;min-width:0;padding:13px;background:#100e18;border:1px solid #252130;border-radius:11px}
.booking-date{flex-shrink:0;width:42px;height:42px;border-radius:10px;display:flex;flex-direction:column;align-items:center;justify-content:center;background:#805cf71e;color:var(--light)}
.booking-date strong{font-size:15px}.booking-date small{font-size:8px;text-transform:uppercase}
.booking-info{flex:1;min-width:0}.booking-info strong{display:block;font-size:10px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;margin-bottom:5px}.booking-info span{display:block;color:var(--muted);font-size:9px}
.status{display:inline-flex;align-items:center;justify-content:center;white-space:nowrap;padding:6px 9px;border-radius:20px;background:#4bd49a18;color:var(--green);font-size:9px}
.status.pending{background:#ffbd6518;color:var(--orange)}.status.cancelled{background:#ff728318;color:var(--red)}.status.neutral{background:#a49bb51a;color:#c1b8d2}
.page-content{padding-top:32px}.page-header h1{font-size:24px;margin-bottom:7px;letter-spacing:-.5px}
.page-button{display:inline-flex;align-items:center;justify-content:center;gap:8px;border:0;background:linear-gradient(135deg,#805cf7,#6940df);color:white;padding:11px 15px;border-radius:9px;font-size:10px;font-weight:700;cursor:pointer}
.page-button.secondary{background:#191624;border:1px solid var(--border);color:#d5cfe2}
.summary-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:13px;margin-bottom:17px}
.summary-card{padding:17px}.summary-top{display:flex;justify-content:space-between;align-items:center;gap:10px}.summary-top i{color:var(--light)}
.summary-number{font-size:24px;font-weight:800;margin-top:12px}.summary-note{font-size:9px;color:var(--muted);margin-top:5px}
.table-toolbar{display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:16px;flex-wrap:wrap}
.toolbar-left,.toolbar-right{display:flex;align-items:center;gap:9px;flex-wrap:wrap}
.search-box{position:relative}.search-box i{position:absolute;top:50%;left:12px;transform:translateY(-50%);color:var(--muted);font-size:11px}
.search-input,.filter-select,.form-input{background:#100e18;border:1px solid var(--border);border-radius:9px;padding:11px 12px;color:white;outline:none;font-size:10px}
.search-input{width:260px;padding-left:32px}.filter-select{max-width:100%}
.search-input:focus,.filter-select:focus,.form-input:focus{border-color:var(--purple)}
.table-wrap{width:100%;overflow-x:auto}.data-table{width:100%;border-collapse:collapse;min-width:690px}
.data-table th{color:#898297;font-size:9px;text-align:left;font-weight:600;padding:13px 12px;background:#100e18;border-bottom:1px solid var(--border);white-space:nowrap}
.data-table td{color:#d1ccdc;font-size:10px;padding:15px 12px;border-bottom:1px solid #211e2b;vertical-align:middle}
.data-table tbody tr:hover{background:#ffffff04}.data-table tbody tr:last-child td{border-bottom:0}
.id-text{color:var(--light);font-weight:700}.customer-cell{display:flex;align-items:center;gap:9px;min-width:145px}
.avatar{width:34px;height:34px;flex-shrink:0;border-radius:10px;font-size:10px}
.customer-cell strong{display:block;font-size:10px;color:white;margin-bottom:4px}.customer-cell small{color:var(--muted);font-size:9px}
.table-actions{display:flex;gap:6px}.icon-button{display:grid;place-items:center;width:29px;height:29px;border-radius:7px;background:#181522;border:1px solid #2a2638;color:#bcb3d2;cursor:pointer}
.icon-button:hover{background:#805cf729;color:white}
.destination-toolbar{display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap;margin-bottom:20px}
.destination-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:17px}
.destination-card{overflow:hidden;transition:.2s}.destination-card:hover{transform:translateY(-4px);border-color:#7657e8}
.destination-image{width:100%;height:190px;display:block;object-fit:cover;background:#191525}
.destination-body{padding:17px}.destination-card-top{display:flex;align-items:center;justify-content:space-between;gap:8px;margin-bottom:10px}
.destination-card h3{font-size:15px}.destination-rating{font-size:10px;color:#ffc46b;white-space:nowrap}
.destination-body p{color:var(--muted);font-size:11px;line-height:1.7;min-height:38px}
.destination-meta{display:flex;gap:13px;flex-wrap:wrap;color:#a59bb8;font-size:10px;margin-top:13px}
.destination-footer{display:flex;align-items:center;justify-content:space-between;gap:8px;margin-top:15px;padding-top:14px;border-top:1px solid var(--border)}
.destination-price{font-size:14px;color:#b39bff;font-weight:800}.destination-price small{font-size:9px;color:var(--muted);font-weight:400}
.guide-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:15px}
.guide-card{padding:20px}.guide-avatar{width:51px;height:51px;border-radius:15px;display:grid;place-items:center;background:linear-gradient(135deg,#6341d8,#2b2149);font-size:18px;font-weight:800}
.guide-top{display:flex;justify-content:space-between;align-items:flex-start;gap:10px}.guide-card h3{font-size:13px;margin-top:17px}.guide-role{color:var(--muted);font-size:10px;margin-top:5px}
.guide-details{margin-top:17px;padding-top:14px;border-top:1px solid var(--border);display:grid;gap:11px}
.guide-detail{display:flex;justify-content:space-between;gap:10px;font-size:10px}.guide-detail span:first-child{color:var(--muted)}.guide-detail span:last-child{text-align:right}
.guide-footer{display:flex;justify-content:space-between;align-items:center;margin-top:16px}.rating{color:#ffca75;font-size:10px}
.message-layout{display:grid;grid-template-columns:minmax(0,1.1fr) minmax(270px,.9fr);gap:17px}
.message-list{display:grid;gap:10px}.message-card{padding:15px;display:flex;gap:12px;align-items:flex-start;cursor:pointer;transition:.2s}
.message-card:hover,.message-card.selected{border-color:#7755e9;background:#12101d}
.message-avatar{width:40px;height:40px;border-radius:13px;flex-shrink:0;display:grid;place-items:center;background:#302252;color:#d4c4ff;font-weight:800}
.message-main{flex:1;min-width:0}.message-top{display:flex;align-items:center;justify-content:space-between;gap:10px}
.message-top strong{font-size:11px}.message-time{color:var(--muted);font-size:9px;white-space:nowrap}
.message-subject{font-size:10px;color:#ddd6ee;margin-top:7px}.message-preview{font-size:10px;color:var(--muted);line-height:1.6;margin-top:5px}
.message-detail{min-height:320px}.message-detail h3{font-size:15px;margin-bottom:8px}.message-detail p{font-size:11px;color:#aaa2b8;line-height:1.9}
.message-detail .form-input{width:100%;margin-top:12px;min-height:100px;resize:vertical}
.settings-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}
.settings-card{padding:20px}.settings-card h2{font-size:14px;margin-bottom:6px}.settings-card>p{font-size:10px;color:var(--muted);line-height:1.7;margin-bottom:16px}
.setting-row{display:flex;align-items:center;justify-content:space-between;gap:15px;padding:16px 0;border-bottom:1px solid var(--border)}
.setting-row:last-child{border-bottom:none}.setting-row strong{display:block;font-size:11px;margin-bottom:5px}.setting-row span{color:var(--muted);font-size:10px}
.switch{position:relative;display:inline-block;width:37px;height:21px;flex-shrink:0}.switch input{opacity:0;width:0;height:0}
.slider{position:absolute;inset:0;border-radius:20px;background:#393344;cursor:pointer;transition:.2s}
.slider:before{content:"";position:absolute;width:15px;height:15px;left:3px;top:3px;border-radius:50%;background:white;transition:.2s}
.switch input:checked+.slider{background:var(--purple)}.switch input:checked+.slider:before{transform:translateX(16px)}
.form-label{display:block;font-size:10px;color:#aaa2b8;margin:14px 0 7px}.form-input{width:100%;font-size:11px}
.footer-note{text-align:center;color:#625c70;font-size:9px;margin-top:20px}
@media(max-width:1100px){.top-navbar{gap:12px;padding:0 2%}.main-nav a{padding:10px 6px;font-size:10px}.main-content,.page-content,.stats-container,.hero{padding-left:2%;padding-right:2%}.destination-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media(max-width:900px){.main-nav{display:none}.top-navbar{justify-content:space-between}.stats,.summary-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.main-grid,.message-layout{grid-template-columns:1fr}.booking-list{grid-template-columns:1fr}.guide-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media(max-width:600px){.top-navbar{min-height:64px;padding:0 15px}.profile-info{display:none}.hero{padding:26px 17px 75px}.hero-content{align-items:flex-start;flex-direction:column}.welcome h1{font-size:23px}.stats-container{padding:0 12px}.stats{gap:8px}.stat-card{padding:13px}.stat-number{font-size:21px}.main-content,.page-content{padding:18px 12px 30px}.page-header{align-items:flex-start;flex-direction:column}.page-header h1{font-size:22px}.summary-grid{gap:8px}.summary-card{padding:13px}.summary-number{font-size:21px}.destination-grid,.guide-grid,.settings-grid{grid-template-columns:1fr}.destination-image{height:210px}.panel{padding:14px}.table-toolbar{align-items:stretch}.toolbar-left,.toolbar-right,.search-box,.search-input{width:100%}.filter-select{flex:1}.data-table{min-width:720px}}
@media print{.top-navbar,.page-actions,.table-toolbar,.icon-button{display:none!important}body{background:white;color:#111}.panel,.summary-card,.data-table td{background:white;color:#111}}
</style>
</head>
<body>
@php($page = request('page','dashboard'))
<div class="dashboard">
<nav class="top-navbar">
<a href="{{ route('admin.dashboard',['page'=>'dashboard']) }}" class="logo-area"><div class="logo-icon"><i class="fa-solid fa-plane"></i></div><div class="logo-text">Travel<span>Ease</span></div></a>
<div class="main-nav">
@foreach(['dashboard'=>'Dashboard','destinations'=>'Destinations','bookings'=>'Bookings','customers'=>'Customers','tour-guide'=>'Tour Guide','payments'=>'Payments','messages'=>'Messages','settings'=>'Settings'] as $key=>$label)
<a href="{{ route('admin.dashboard',['page'=>$key]) }}" class="{{ $page===$key?'active':'' }}">{{ $label }}</a>
@endforeach
</div>
<div class="nav-right"><i class="fa-solid fa-magnifying-glass"></i><i class="fa-regular fa-bell"></i><div class="profile"><div class="profile-image">A</div><div class="profile-info"><strong>Admin</strong><small>Administrator</small></div></div></div>
</nav>

@if($page==='dashboard')
<section class="hero"><div class="hero-content"><div class="welcome"><h1>Welcome back, Admin 👋</h1><p>Here is what's happening with your travel business today.</p></div><div class="hero-actions"><span class="month-button"><i class="fa-regular fa-calendar"></i> October 2026</span><a class="download-button" href="{{ route('admin.dashboard',['page'=>'bookings']) }}">View Bookings <i class="fa-solid fa-arrow-right"></i></a></div></div></section>
<div class="stats-container"><div class="stats">
<div class="stat-card"><div class="stat-top"><span class="stat-title">Total Revenue</span><span class="stat-icon"><i class="fa-solid fa-wallet"></i></span></div><div class="stat-number">Rs. 835K</div><div class="stat-description"><span class="up">↑ 8.2%</span> compared with last month</div><div class="progress"><span style="width:78%"></span></div></div>
<div class="stat-card"><div class="stat-top"><span class="stat-title">Total Bookings</span><span class="stat-icon"><i class="fa-solid fa-calendar-check"></i></span></div><div class="stat-number">12,400</div><div class="stat-description"><span class="up">↑ 12.8%</span> compared with last month</div><div class="progress"><span style="width:72%"></span></div></div>
<div class="stat-card"><div class="stat-top"><span class="stat-title">Destinations</span><span class="stat-icon"><i class="fa-solid fa-earth-asia"></i></span></div><div class="stat-number">120</div><div class="stat-description"><span class="up">↑ 6.4%</span> destinations listed</div><div class="progress"><span style="width:58%"></span></div></div>
<div class="stat-card"><div class="stat-top"><span class="stat-title">Total Customers</span><span class="stat-icon"><i class="fa-solid fa-users"></i></span></div><div class="stat-number">8,780</div><div class="stat-description"><span class="up">↑ 15.0%</span> customer growth</div><div class="progress"><span style="width:84%"></span></div></div>
</div></div>
<main class="main-content"><div class="main-grid">
<section class="panel"><div class="panel-header"><div class="panel-title"><h2>Revenue Statistics</h2><p>Travel business performance overview</p></div><select class="filter-select" id="chartPeriod"><option value="year">This Year</option><option value="week">This Week</option></select></div><div class="chart-container"><canvas id="revenueChart"></canvas></div></section>
<section class="panel"><div class="panel-header"><div class="panel-title"><h2>Booking Schedule</h2><p>Travel reservations calendar</p></div><i class="fa-regular fa-calendar" style="color:var(--light)"></i></div><div class="calendar-header"><strong id="calendarMonth"></strong><div class="calendar-buttons"><button id="prevMonth"><i class="fa-solid fa-chevron-left"></i></button><button id="nextMonth"><i class="fa-solid fa-chevron-right"></i></button></div></div><div class="calendar" id="calendar"></div></section>
</div>
<section class="panel"><div class="panel-header"><div class="panel-title"><h2>Upcoming Bookings</h2><p>Recent customer reservations</p></div><a style="color:var(--light)" href="{{ route('admin.dashboard',['page'=>'bookings']) }}">View all →</a></div><div class="booking-list">
<div class="booking"><div class="booking-date"><strong>21</strong><small>Oct</small></div><div class="booking-info"><strong>Dubai Holiday Package</strong><span>#TE-1024 · 2 travelers</span></div><span class="status">Confirmed</span></div>
<div class="booking"><div class="booking-date"><strong>23</strong><small>Oct</small></div><div class="booking-info"><strong>Hunza Valley Tour</strong><span>#TE-1025 · 4 travelers</span></div><span class="status pending">Pending</span></div>
<div class="booking"><div class="booking-date"><strong>26</strong><small>Oct</small></div><div class="booking-info"><strong>Turkey Explorer</strong><span>#TE-1026 · 2 travelers</span></div><span class="status">Confirmed</span></div>
</div></section></main>

@elseif($page==='destinations')
<main class="page-content">
<div class="page-header"><div><h1>Explore Destinations</h1><p>Manage travel locations, package prices and destination highlights.</p></div><button class="page-button" onclick="alert('Connect this button to your destination creation form.')"><i class="fa-solid fa-plus"></i> Add Destination</button></div>
<div class="summary-grid"><div class="summary-card"><div class="summary-top">Listed Destinations <i class="fa-solid fa-earth-asia"></i></div><div class="summary-number">120</div><div class="summary-note">Across popular regions</div></div><div class="summary-card"><div class="summary-top">International <i class="fa-solid fa-plane"></i></div><div class="summary-number">86</div><div class="summary-note">International locations</div></div><div class="summary-card"><div class="summary-top">Local Tours <i class="fa-solid fa-mountain-sun"></i></div><div class="summary-number">34</div><div class="summary-note">Pakistan destinations</div></div><div class="summary-card"><div class="summary-top">Featured <i class="fa-solid fa-star"></i></div><div class="summary-number">12</div><div class="summary-note">Featured packages</div></div></div>
<div class="destination-toolbar"><div class="search-box"><i class="fa-solid fa-magnifying-glass"></i><input id="destinationSearch" class="search-input" placeholder="Search destination..."></div><select id="destinationRegion" class="filter-select"><option value="all">All destinations</option><option value="pakistan">Pakistan</option><option value="international">International</option></select></div>
<div class="destination-grid" id="destinationGrid">
<article class="destination-card" data-region="international"><img class="destination-image" loading="lazy" src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=900&q=85" alt="Dubai skyline"><div class="destination-body"><div class="destination-card-top"><h3>Dubai, UAE</h3><span class="destination-rating">★ 4.9</span></div><p>Luxury city escapes, iconic skylines, desert safaris and premium shopping experiences.</p><div class="destination-meta"><span><i class="fa-regular fa-clock"></i> 5 Days</span><span><i class="fa-solid fa-location-dot"></i> Middle East</span></div><div class="destination-footer"><div class="destination-price">Rs. 185,000 <small>/ person</small></div><button class="icon-button" onclick="showRecord('Dubai, UAE','5-day premium city holiday package')"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></div></div></article>
<article class="destination-card" data-region="pakistan"><img class="destination-image" loading="lazy" src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=900&q=85" alt="Mountain valley"><div class="destination-body"><div class="destination-card-top"><h3>Hunza Valley</h3><span class="destination-rating">★ 4.9</span></div><p>Discover dramatic mountain landscapes, peaceful valleys and unforgettable scenic drives.</p><div class="destination-meta"><span><i class="fa-regular fa-clock"></i> 6 Days</span><span><i class="fa-solid fa-location-dot"></i> Gilgit-Baltistan</span></div><div class="destination-footer"><div class="destination-price">Rs. 45,000 <small>/ person</small></div><button class="icon-button" onclick="showRecord('Hunza Valley','6-day northern Pakistan tour')"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></div></div></article>
<article class="destination-card" data-region="international"><img class="destination-image" loading="lazy" src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=900&q=85" alt="Istanbul city"><div class="destination-body"><div class="destination-card-top"><h3>Istanbul, Türkiye</h3><span class="destination-rating">★ 4.8</span></div><p>Experience historic landmarks, waterfront views, vibrant bazaars and local culture.</p><div class="destination-meta"><span><i class="fa-regular fa-clock"></i> 7 Days</span><span><i class="fa-solid fa-location-dot"></i> Europe & Asia</span></div><div class="destination-footer"><div class="destination-price">Rs. 210,000 <small>/ person</small></div><button class="icon-button" onclick="showRecord('Istanbul, Türkiye','7-day cultural city tour')"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></div></div></article>
<article class="destination-card" data-region="international"><img class="destination-image" loading="lazy" src="https://images.unsplash.com/photo-1514282401047-d79a71a590e8?auto=format&fit=crop&w=900&q=85" alt="Maldives resort"><div class="destination-body"><div class="destination-card-top"><h3>Maldives</h3><span class="destination-rating">★ 5.0</span></div><p>Crystal-clear water, island resorts, relaxing beaches and romantic escapes.</p><div class="destination-meta"><span><i class="fa-regular fa-clock"></i> 5 Days</span><span><i class="fa-solid fa-location-dot"></i> Indian Ocean</span></div><div class="destination-footer"><div class="destination-price">Rs. 325,000 <small>/ person</small></div><button class="icon-button" onclick="showRecord('Maldives','5-day island resort holiday')"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></div></div></article>
<article class="destination-card" data-region="international"><img class="destination-image" loading="lazy" src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=900&q=85" alt="Paris Eiffel Tower"><div class="destination-body"><div class="destination-card-top"><h3>Paris, France</h3><span class="destination-rating">★ 4.8</span></div><p>Romantic city walks, celebrated museums, famous landmarks and French cuisine.</p><div class="destination-meta"><span><i class="fa-regular fa-clock"></i> 6 Days</span><span><i class="fa-solid fa-location-dot"></i> Western Europe</span></div><div class="destination-footer"><div class="destination-price">Rs. 390,000 <small>/ person</small></div><button class="icon-button" onclick="showRecord('Paris, France','6-day European city experience')"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></div></div></article>
<article class="destination-card" data-region="pakistan"><img class="destination-image" loading="lazy" src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&fit=crop&w=900&q=85" alt="Nature and mountains"><div class="destination-body"><div class="destination-card-top"><h3>Skardu, Pakistan</h3><span class="destination-rating">★ 4.9</span></div><p>Glacial lakes, high mountain views, peaceful landscapes and adventure excursions.</p><div class="destination-meta"><span><i class="fa-regular fa-clock"></i> 5 Days</span><span><i class="fa-solid fa-location-dot"></i> Gilgit-Baltistan</span></div><div class="destination-footer"><div class="destination-price">Rs. 52,000 <small>/ person</small></div><button class="icon-button" onclick="showRecord('Skardu, Pakistan','5-day mountain adventure package')"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></div></div></article>
<article class="destination-card" data-region="international"><img class="destination-image" loading="lazy" src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=900&q=85" alt="London city"><div class="destination-body"><div class="destination-card-top"><h3>London, UK</h3><span class="destination-rating">★ 4.7</span></div><p>Explore historic streets, royal landmarks, theatre districts and famous museums.</p><div class="destination-meta"><span><i class="fa-regular fa-clock"></i> 6 Days</span><span><i class="fa-solid fa-location-dot"></i> United Kingdom</span></div><div class="destination-footer"><div class="destination-price">Rs. 365,000 <small>/ person</small></div><button class="icon-button" onclick="showRecord('London, UK','6-day London sightseeing package')"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></div></div></article>
<article class="destination-card" data-region="international"><img class="destination-image" loading="lazy" src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=900&q=85" alt="Bali tropical landscape"><div class="destination-body"><div class="destination-card-top"><h3>Bali, Indonesia</h3><span class="destination-rating">★ 4.8</span></div><p>Tropical scenery, cultural temples, green rice terraces and coastal relaxation.</p><div class="destination-meta"><span><i class="fa-regular fa-clock"></i> 7 Days</span><span><i class="fa-solid fa-location-dot"></i> Southeast Asia</span></div><div class="destination-footer"><div class="destination-price">Rs. 275,000 <small>/ person</small></div><button class="icon-button" onclick="showRecord('Bali, Indonesia','7-day tropical island holiday')"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></div></div></article>
<article class="destination-card" data-region="international"><img class="destination-image" loading="lazy" src="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=900&q=85" alt="Makkah mosque"><div class="destination-body"><div class="destination-card-top"><h3>Saudi Arabia</h3><span class="destination-rating">★ 4.9</span></div><p>Organised religious travel options, family arrangements and guided support.</p><div class="destination-meta"><span><i class="fa-regular fa-clock"></i> Package-based</span><span><i class="fa-solid fa-location-dot"></i> Middle East</span></div><div class="destination-footer"><div class="destination-price">Rs. 245,000 <small>/ person</small></div><button class="icon-button" onclick="showRecord('Saudi Arabia','Religious travel package; price varies by dates and services')"><i class="fa-solid fa-arrow-up-right-from-square"></i></button></div></div></article>
</div><p class="footer-note">Destination prices and ratings are illustrative sample data. Images require an internet connection.</p>
</main>

@elseif($page==='customers')
<main class="page-content">
<div class="page-header"><div><h1>Customer Management</h1><p>Review customer profiles, bookings and travel preferences.</p></div><button class="page-button" onclick="window.print()"><i class="fa-solid fa-download"></i> Export / Print</button></div>
<div class="summary-grid"><div class="summary-card"><div class="summary-top">Total Customers <i class="fa-solid fa-users"></i></div><div class="summary-number">8,780</div><div class="summary-note">Registered customers</div></div><div class="summary-card"><div class="summary-top">Active Customers <i class="fa-solid fa-user-check"></i></div><div class="summary-number">7,420</div><div class="summary-note">Engaged with services</div></div><div class="summary-card"><div class="summary-top">New This Month <i class="fa-solid fa-user-plus"></i></div><div class="summary-number">248</div><div class="summary-note">Recent registrations</div></div><div class="summary-card"><div class="summary-top">Repeat Travelers <i class="fa-solid fa-repeat"></i></div><div class="summary-number">1,840</div><div class="summary-note">More than one booking</div></div></div>
<section class="panel"><div class="panel-header"><div class="panel-title"><h2>Customer Directory</h2><p>Customer contact information and booking activity</p></div></div><div class="table-toolbar"><div class="toolbar-left"><div class="search-box"><i class="fa-solid fa-magnifying-glass"></i><input id="customerSearch" class="search-input" placeholder="Search name, email or destination..."></div></div><div class="toolbar-right"><select id="customerStatus" class="filter-select"><option value="all">All customers</option><option value="active">Active</option><option value="new">New</option><option value="inactive">Inactive</option></select></div></div>
<div class="table-wrap"><table class="data-table" id="customersTable"><thead><tr><th>CUSTOMER</th><th>CONTACT</th><th>PHONE</th><th>BOOKINGS</th><th>LAST DESTINATION</th><th>SPENDING</th><th>STATUS</th><th>ACTION</th></tr></thead><tbody>
<tr data-status="active"><td><div class="customer-cell"><div class="avatar">SA</div><div><strong>Sarah Ahmed</strong><small>Customer ID C-1001</small></div></div></td><td>sarah@example.com</td><td>+92 300 1234567</td><td>5</td><td>Dubai</td><td>Rs. 425,000</td><td><span class="status">Active</span></td><td><button class="icon-button" onclick="showRecord('Sarah Ahmed','sarah@example.com · 5 bookings · Dubai')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr data-status="active"><td><div class="customer-cell"><div class="avatar">WK</div><div><strong> Muhammad Waleed </strong><small>Customer ID C-1002</small></div></div></td><td>waleed@example.com</td><td>+92 301 2345678</td><td>4</td><td>Hunza Valley</td><td>Rs. 290,000</td><td><span class="status">Active</span></td><td><button class="icon-button" onclick="showRecord('Muhammad Waleed','waleed@example.com · 4 bookings · Hunza Valley')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr data-status="active"><td><div class="customer-cell"><div class="avatar">AN</div><div><strong>Asma Khan</strong><small>Customer ID C-1003</small></div></div></td><td>asma.khan@example.com</td><td>+92 302 3456789</td><td>4</td><td>Istanbul</td><td>Rs. 510,000</td><td><span class="status">Active</span></td><td><button class="icon-button" onclick="showRecord('Asma Khan','asma.khan@example.com · 4 bookings · Istanbul')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr data-status="new"><td><div class="customer-cell"><div class="avatar">MH</div><div><strong>Maryam Hussain</strong><small>Customer ID C-1004</small></div></div></td><td>maryam@example.com</td><td>+92 303 4567890</td><td>1</td><td>Maldives</td><td>Rs. 325,000</td><td><span class="status pending">New</span></td><td><button class="icon-button" onclick="showRecord('Maryam Hussain','maryam@example.com · 1 booking · Maldives')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr data-status="active"><td><div class="customer-cell"><div class="avatar">UF</div><div><strong>Usman Farooq</strong><small>Customer ID C-1005</small></div></div></td><td>usman@example.com</td><td>+92 304 5678901</td><td>7</td><td>Saudi Arabia</td><td>Rs. 780,000</td><td><span class="status">Active</span></td><td><button class="icon-button" onclick="showRecord('Usman Farooq','usman@example.com · 7 bookings · Saudi Arabia')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr data-status="inactive"><td><div class="customer-cell"><div class="avatar">FA</div><div><strong>Fatima Ali</strong><small>Customer ID C-1006</small></div></div></td><td>fatima.ali@example.com</td><td>+92 305 6789012</td><td>2</td><td>Paris</td><td>Rs. 650,000</td><td><span class="status neutral">Inactive</span></td><td><button class="icon-button" onclick="showRecord('Fatima Ali','fatima.ali@example.com · 2 bookings · Paris')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr data-status="active"><td><div class="customer-cell"><div class="avatar">HA</div><div><strong>Hamza Ahmed</strong><small>Customer ID C-1007</small></div></div></td><td>hamza@example.com</td><td>+92 306 7890123</td><td>3</td><td>Skardu</td><td>Rs. 180,000</td><td><span class="status">Active</span></td><td><button class="icon-button" onclick="showRecord('Hamza Ahmed','hamza@example.com · 3 bookings · Skardu')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr data-status="new"><td><div class="customer-cell"><div class="avatar">ZN</div><div><strong>Zara Noor</strong><small>Customer ID C-1008</small></div></div></td><td>zara.noor@example.com</td><td>+92 307 8901234</td><td>1</td><td>Bali</td><td>Rs. 275,000</td><td><span class="status pending">New</span></td><td><button class="icon-button" onclick="showRecord('Zara Noor','zara.noor@example.com · 1 booking · Bali')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr data-status="active"><td><div class="customer-cell"><div class="avatar">AK</div><div><strong>Arif Khan</strong><small>Customer ID C-1009</small></div></div></td><td>arif.khan@example.com</td><td>+92 308 9012345</td><td>6</td><td>London</td><td>Rs. 920,000</td><td><span class="status">Active</span></td><td><button class="icon-button" onclick="showRecord('Arif Khan','ali.khan@example.com · 6 bookings · London')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr data-status="active"><td><div class="customer-cell"><div class="avatar">SA</div><div><strong>Sana Ahmed</strong><small>Customer ID C-1010</small></div></div></td><td>sana.ahmed@example.com</td><td>+92 309 0123456</td><td>3</td><td>Dubai</td><td>Rs. 410,000</td><td><span class="status">Active</span></td><td><button class="icon-button" onclick="showRecord('Sana Ahmed','sana.ahmed@example.com · 3 bookings · Dubai')"><i class="fa-regular fa-eye"></i></button></td></tr>
</tbody></table></div><p class="footer-note">Customer records are demonstration data. Replace them with database records when connecting the customer module.</p></section>
</main>

@elseif($page==='bookings')
<main class="page-content"><div class="page-header"><div><h1>Booking Management</h1><p>Review reservations, track travel plans and manage booking status.</p></div><div class="page-actions"><button class="page-button secondary" onclick="window.print()"><i class="fa-solid fa-download"></i> Export / Print</button><button class="page-button" onclick="showRecord('New Booking','Connect this action to a booking creation form.')"><i class="fa-solid fa-plus"></i> New Booking</button></div></div>
<div class="summary-grid"><div class="summary-card"><div class="summary-top">Total Bookings <i class="fa-solid fa-calendar-check"></i></div><div class="summary-number">1,248</div><div class="summary-note">All reservations</div></div><div class="summary-card"><div class="summary-top">Confirmed <i class="fa-solid fa-circle-check"></i></div><div class="summary-number">864</div><div class="summary-note">Confirmed reservations</div></div><div class="summary-card"><div class="summary-top">Pending <i class="fa-regular fa-clock"></i></div><div class="summary-number">276</div><div class="summary-note">Awaiting confirmation</div></div><div class="summary-card"><div class="summary-top">Cancelled <i class="fa-solid fa-ban"></i></div><div class="summary-number">108</div><div class="summary-note">Cancelled reservations</div></div></div>
<section class="panel"><div class="panel-header"><div class="panel-title"><h2>All Reservations</h2><p>Booking reference, customer, package and current status</p></div></div><div class="table-toolbar"><div class="search-box"><i class="fa-solid fa-magnifying-glass"></i><input class="search-input" id="bookingSearch" placeholder="Search booking or customer..."></div><select class="filter-select" id="bookingStatus"><option value="all">All statuses</option><option value="confirmed">Confirmed</option><option value="pending">Pending</option><option value="cancelled">Cancelled</option></select></div>
<div class="table-wrap"><table class="data-table" id="bookingsTable"><thead><tr><th>BOOKING ID</th><th>CUSTOMER</th><th>PACKAGE</th><th>TRAVEL DATE</th><th>TRAVELERS</th><th>AMOUNT</th><th>STATUS</th><th>ACTION</th></tr></thead><tbody>
<tr><td class="id-text">#TE-1024</td><td>Sarah Ahmed</td><td>Dubai Holiday</td><td>21 Oct 2026</td><td>2</td><td>Rs. 185,000</td><td><span class="status">Confirmed</span></td><td><button class="icon-button" onclick="showRecord('Booking #TE-1024','Sarah Ahmed · Dubai Holiday · Rs. 185,000')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr><td class="id-text">#TE-1025</td><td> Muhammad Waleed</td><td>Hunza Valley</td><td>23 Oct 2026</td><td>4</td><td>Rs. 95,000</td><td><span class="status pending">Pending</span></td><td><button class="icon-button" onclick="showRecord('Booking #TE-1025',' Muhammad Waleed · Hunza Valley · Rs. 95,000')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr><td class="id-text">#TE-1026</td><td>Asma Khan</td><td>Turkey Explorer</td><td>26 Oct 2026</td><td>2</td><td>Rs. 210,000</td><td><span class="status">Confirmed</span></td><td><button class="icon-button" onclick="showRecord('Booking #TE-1026','Asma Khan · Turkey Explorer · Rs. 210,000')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr><td class="id-text">#TE-1027</td><td>Maryam Hussain</td><td>Maldives Escape</td><td>29 Oct 2026</td><td>2</td><td>Rs. 325,000</td><td><span class="status cancelled">Cancelled</span></td><td><button class="icon-button" onclick="showRecord('Booking #TE-1027','Maryam Hussain · Maldives Escape · Cancelled')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr><td class="id-text">#TE-1028</td><td>Usman Farooq</td><td>Saudi Family Tour</td><td>02 Nov 2026</td><td>5</td><td>Rs. 280,000</td><td><span class="status pending">Pending</span></td><td><button class="icon-button" onclick="showRecord('Booking #TE-1028','Usman Farooq · Saudi Family Tour · Pending')"><i class="fa-regular fa-eye"></i></button></td></tr>
</tbody></table></div></section></main>

@elseif($page==='payments')
<main class="page-content"><div class="page-header"><div><h1>Payments & Transactions</h1><p>Monitor collections, outstanding payments and transaction records.</p></div><button class="page-button secondary" onclick="window.print()"><i class="fa-solid fa-file-arrow-down"></i> Export / Print</button></div>
<div class="summary-grid"><div class="summary-card"><div class="summary-top">Total Collected <i class="fa-solid fa-wallet"></i></div><div class="summary-number">Rs. 8.35M</div><div class="summary-note">Illustrative revenue</div></div><div class="summary-card"><div class="summary-top">Successful <i class="fa-solid fa-circle-check"></i></div><div class="summary-number">864</div><div class="summary-note">Payments received</div></div><div class="summary-card"><div class="summary-top">Pending Amount <i class="fa-regular fa-clock"></i></div><div class="summary-number">Rs. 425K</div><div class="summary-note">Awaiting payment</div></div><div class="summary-card"><div class="summary-top">Refunds <i class="fa-solid fa-arrow-rotate-left"></i></div><div class="summary-number">Rs. 85K</div><div class="summary-note">Illustrative refunds</div></div></div>
<section class="panel"><div class="panel-header"><div class="panel-title"><h2>Transaction History</h2><p>Payment references and transaction status</p></div></div><div class="table-toolbar"><div class="search-box"><i class="fa-solid fa-magnifying-glass"></i><input id="paymentSearch" class="search-input" placeholder="Search transaction or customer..."></div><select class="filter-select" id="paymentStatus"><option value="all">All statuses</option><option value="paid">Paid</option><option value="pending">Pending</option><option value="refunded">Refunded</option></select></div>
<div class="table-wrap"><table class="data-table" id="paymentsTable"><thead><tr><th>TRANSACTION ID</th><th>CUSTOMER</th><th>BOOKING</th><th>DATE</th><th>METHOD</th><th>AMOUNT</th><th>STATUS</th><th>ACTION</th></tr></thead><tbody>
<tr><td class="id-text">#PAY-1001</td><td>Sarah Ahmed</td><td>#TE-1024</td><td>18 Oct 2026</td><td>Card</td><td>Rs. 185,000</td><td><span class="status">Paid</span></td><td><button class="icon-button" onclick="showRecord('PAY-1001','Sarah Ahmed · Card · Rs. 185,000 · Paid')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr><td class="id-text">#PAY-1002</td><td>Muhammad Waleed</td><td>#TE-1025</td><td>19 Oct 2026</td><td>Bank Transfer</td><td>Rs. 95,000</td><td><span class="status pending">Pending</span></td><td><button class="icon-button" onclick="showRecord('PAY-1002','Muhammad Waleed · Bank Transfer · Pending')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr><td class="id-text">#PAY-1003</td><td>Asma Khan</td><td>#TE-1026</td><td>19 Oct 2026</td><td>Card</td><td>Rs. 210,000</td><td><span class="status">Paid</span></td><td><button class="icon-button" onclick="showRecord('PAY-1003','Asma Khan · Card · Rs. 210,000 · Paid')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr><td class="id-text">#PAY-1004</td><td>Maryam Hussain</td><td>#TE-1027</td><td>20 Oct 2026</td><td>Cash</td><td>Rs. 85,000</td><td><span class="status cancelled">Refunded</span></td><td><button class="icon-button" onclick="showRecord('PAY-1004','Maryam Hussain · Cash · Refunded')"><i class="fa-regular fa-eye"></i></button></td></tr>
<tr><td class="id-text">#PAY-1005</td><td>Usman Farooq</td><td>#TE-1028</td><td>20 Oct 2026</td><td>Bank Transfer</td><td>Rs. 120,000</td><td><span class="status pending">Pending</span></td><td><button class="icon-button" onclick="showRecord('PAY-1005','Usman Farooq · Bank Transfer · Pending')"><i class="fa-regular fa-eye"></i></button></td></tr>
</tbody></table></div></section></main>

@elseif($page==='tour-guide')
<main class="page-content"><div class="page-header"><div><h1>Tour Guide Management</h1><p>Manage guide profiles, destinations and availability.</p></div><button class="page-button" onclick="showRecord('Add Tour Guide','Connect this button to a guide registration form.')"><i class="fa-solid fa-plus"></i> Add Guide</button></div>
<div class="summary-grid"><div class="summary-card"><div class="summary-top">Total Guides <i class="fa-solid fa-user-tie"></i></div><div class="summary-number">24</div><div class="summary-note">Registered guides</div></div><div class="summary-card"><div class="summary-top">Available <i class="fa-solid fa-circle-check"></i></div><div class="summary-number">16</div><div class="summary-note">Ready for assignments</div></div><div class="summary-card"><div class="summary-top">On Tour <i class="fa-solid fa-route"></i></div><div class="summary-number">6</div><div class="summary-note">Currently assigned</div></div><div class="summary-card"><div class="summary-top">Off Duty <i class="fa-solid fa-moon"></i></div><div class="summary-number">2</div><div class="summary-note">Not available</div></div></div>
<div class="table-toolbar"><div class="search-box"><i class="fa-solid fa-magnifying-glass"></i><input id="guideSearch" class="search-input" placeholder="Search guide or destination..."></div><select id="guideStatus" class="filter-select"><option value="all">All availability</option><option value="available">Available</option><option value="assigned">Assigned</option><option value="off duty">Off Duty</option></select></div>
<div class="guide-grid" id="guideGrid">
@foreach([['AH','Ahmed Hassan','Senior Tour Guide','Dubai, UAE','City & Luxury Tours','6 years','4.9','available'],['UK','Usman Khan','Adventure Guide','Hunza Valley','Hiking & Adventure','4 years','4.8','assigned'],['FN','Fatima Noor','Cultural Tour Guide','Istanbul, Türkiye','History & Culture','5 years','4.9','available'],['BM','Bilal Mahmood','Family Tour Guide','Islamabad','Family Tours','3 years','4.7','off duty'],['SA','Sana Ali','Nature Tour Guide','Skardu, Pakistan','Nature & Sightseeing','4 years','4.8','assigned'],['ZA','Zain Abbas','International Tour Guide','Kuala Lumpur','City & Group Tours','7 years','4.9','available']] as $guide)
<article class="guide-card" data-status="{{ $guide[7] }}"><div class="guide-top"><div class="guide-avatar">{{ $guide[0] }}</div><span class="status {{ $guide[7]==='assigned'?'pending':($guide[7]==='off duty'?'neutral':'') }}">{{ ucfirst($guide[7]) }}</span></div><h3 style="margin-top:17px">{{ $guide[1] }}</h3><p class="guide-role">{{ $guide[2] }}</p><div class="guide-details"><div class="guide-detail"><span>Destination</span><span>{{ $guide[3] }}</span></div><div class="guide-detail"><span>Speciality</span><span>{{ $guide[4] }}</span></div><div class="guide-detail"><span>Experience</span><span>{{ $guide[5] }}</span></div></div><div class="guide-footer"><span class="rating">★ {{ $guide[6] }}</span><button class="icon-button" onclick="showRecord('{{ $guide[1] }}','{{ $guide[2] }} · {{ $guide[3] }} · {{ $guide[5] }}')"><i class="fa-regular fa-eye"></i></button></div></article>
@endforeach
</div></main>

@elseif($page==='messages')
<main class="page-content">
<div class="page-header"><div><h1>Messages & Enquiries</h1><p>Review travel questions and customer conversations in one place.</p></div><button class="page-button secondary" onclick="window.print()"><i class="fa-solid fa-download"></i> Export / Print</button></div>
<div class="summary-grid"><div class="summary-card"><div class="summary-top">All Messages <i class="fa-regular fa-envelope"></i></div><div class="summary-number">128</div><div class="summary-note">Messages received</div></div><div class="summary-card"><div class="summary-top">Unread <i class="fa-solid fa-envelope-open-text"></i></div><div class="summary-number">12</div><div class="summary-note">Need attention</div></div><div class="summary-card"><div class="summary-top">Replied <i class="fa-solid fa-reply"></i></div><div class="summary-number">96</div><div class="summary-note">Responses sent</div></div><div class="summary-card"><div class="summary-top">Open Enquiries <i class="fa-regular fa-clock"></i></div><div class="summary-number">20</div><div class="summary-note">Awaiting follow-up</div></div></div>
<div class="table-toolbar"><div class="search-box"><i class="fa-solid fa-magnifying-glass"></i><input id="messageSearch" class="search-input" placeholder="Search messages or customer..."></div><select class="filter-select" id="messageFilter"><option value="all">All messages</option><option value="unread">Unread</option><option value="replied">Replied</option></select></div>
<div class="message-layout"><section class="message-list" id="messageList">
<article class="message-card selected" data-status="unread" data-name="Sarah Ahmed" data-subject="Dubai holiday package" data-detail="Hello, I would like to know if airport transfers and breakfast are included in the Dubai holiday package. Please share the full itinerary and available departure dates."><div class="message-avatar">SA</div><div class="message-main"><div class="message-top"><strong>Sarah Ahmed</strong><span class="message-time">10:45 AM</span></div><div class="message-subject">Dubai holiday package</div><div class="message-preview">Could you please confirm airport transfers and breakfast...</div><span class="status" style="margin-top:8px">Unread</span></div></article>
<article class="message-card" data-status="unread" data-name=" Muhammad Waleed" data-subject="Hunza tour availability" data-detail="We are planning a family trip to Hunza for four people. Please tell us about hotel options, transport and the best departure dates in October."><div class="message-avatar">WK</div><div class="message-main"><div class="message-top"><strong> Muhammad Waleed</strong><span class="message-time">09:30 AM</span></div><div class="message-subject">Hunza tour availability</div><div class="message-preview">We are planning a family trip for four people...</div><span class="status" style="margin-top:8px">Unread</span></div></article>
<article class="message-card" data-status="replied" data-name="Asma Khan" data-subject="Turkey package details" data-detail="Thank you for sharing the Turkey package details. I would like to know whether the museum tickets are included in the final package price."><div class="message-avatar">AN</div><div class="message-main"><div class="message-top"><strong>Asma Khan</strong><span class="message-time">Yesterday</span></div><div class="message-subject">Turkey package details</div><div class="message-preview">Are museum tickets included in the package price?</div><span class="status pending" style="margin-top:8px">Replied</span></div></article>
<article class="message-card" data-status="unread" data-name="Maryam Hussain" data-subject="Maldives honeymoon offer" data-detail="Please share the available honeymoon packages for the Maldives, including resort options, meals and airport transfers."><div class="message-avatar">MH</div><div class="message-main"><div class="message-top"><strong>Maryam Hussain</strong><span class="message-time">Yesterday</span></div><div class="message-subject">Maldives honeymoon offer</div><div class="message-preview">Please share resort options and honeymoon offers...</div><span class="status">Unread</span></div></article>
<article class="message-card" data-status="replied" data-name="Usman Farooq" data-subject="Saudi family tour" data-detail="Could you send the full itinerary and explain what accommodation and transport services are included in the family package?"><div class="message-avatar">UF</div><div class="message-main"><div class="message-top"><strong>Usman Farooq</strong><span class="message-time">18 Oct</span></div><div class="message-subject">Saudi family tour</div><div class="message-preview">Please send the full itinerary and hotel details...</div><span class="status pending">Replied</span></div></article>
<article class="message-card" data-status="unread" data-name="Fatima Ali" data-subject="Paris travel dates" data-detail="I would like to compare your Paris tour dates and learn whether guided sightseeing is part of the package."><div class="message-avatar">FA</div><div class="message-main"><div class="message-top"><strong>Fatima Ali</strong><span class="message-time">17 Oct</span></div><div class="message-subject">Paris travel dates</div><div class="message-preview">Are guided city tours included in the itinerary?</div><span class="status">Unread</span></div></article>
</section>
<section class="panel message-detail" id="messageDetail"><div class="panel-title"><h2>Message Details</h2><p id="messageFrom">From Sarah Ahmed</p></div><hr style="border:0;border-top:1px solid var(--border);margin:16px 0"><h3 id="messageSubject">Dubai holiday package</h3><p id="messageBody">Hello, I would like to know if airport transfers and breakfast are included in the Dubai holiday package. Please share the full itinerary and available departure dates.</p><label class="form-label" for="replyMessage">Quick reply draft</label><textarea class="form-input" id="replyMessage" placeholder="Write a reply draft here..."></textarea><button class="page-button" style="margin-top:12px" id="saveReply"><i class="fa-solid fa-check"></i> Save Draft</button><p id="replyNotice" style="margin-top:10px;color:var(--green);font-size:10px"></p><p class="footer-note">This sample interface does not send real emails or messages.</p></section>
</div></main>

@elseif($page==='settings')
<main class="page-content"><div class="page-header"><div><h1>Settings & Preferences</h1><p>Manage the appearance and local preferences of your TravelEase dashboard.</p></div><button class="page-button" id="saveSettings"><i class="fa-solid fa-check"></i> Save Preferences</button></div>
<div class="settings-grid">
<section class="settings-card"><h2><i class="fa-regular fa-user" style="color:var(--light);margin-right:8px"></i>Administrator Profile</h2><p>Review the account details displayed in the dashboard.</p><label class="form-label" for="adminName">Display name</label><input class="form-input" id="adminName" value="Admin"><label class="form-label" for="adminEmail">Email address</label><input class="form-input" id="adminEmail" type="email" value="admin@travelease.example"><label class="form-label" for="adminRole">Role</label><input class="form-input" id="adminRole" value="Administrator" readonly></section>
<section class="settings-card"><h2><i class="fa-regular fa-bell" style="color:var(--light);margin-right:8px"></i>Notifications</h2><p>Choose which dashboard notifications are enabled in this browser.</p><div class="setting-row"><div><strong>Booking notifications</strong><span>New reservation reminders</span></div><label class="switch"><input type="checkbox" checked><span class="slider"></span></label></div><div class="setting-row"><div><strong>Payment updates</strong><span>Payment and refund updates</span></div><label class="switch"><input type="checkbox" checked><span class="slider"></span></label></div><div class="setting-row"><div><strong>Customer enquiries</strong><span>New messages from customers</span></div><label class="switch"><input type="checkbox" checked><span class="slider"></span></label></div><div class="setting-row"><div><strong>Weekly summary</strong><span>Weekly business overview</span></div><label class="switch"><input type="checkbox"><span class="slider"></span></label></div></section>
<section class="settings-card"><h2><i class="fa-solid fa-palette" style="color:var(--light);margin-right:8px"></i>Appearance</h2><p>Adjust the visual style of the management dashboard.</p><div class="setting-row"><div><strong>Dashboard theme</strong><span>Dark background with purple accents</span></div><span class="status">Dark / Purple</span></div><div class="setting-row"><div><strong>Compact tables</strong><span>Use a tighter table layout</span></div><label class="switch"><input type="checkbox"><span class="slider"></span></label></div><div class="setting-row"><div><strong>Show welcome greeting</strong><span>Display dashboard welcome panel</span></div><label class="switch"><input type="checkbox" checked><span class="slider"></span></label></div></section>
<section class="settings-card"><h2><i class="fa-solid fa-shield-halved" style="color:var(--light);margin-right:8px"></i>Security & Account</h2><p>Basic account display options and session information.</p><div class="setting-row"><div><strong>Account role</strong><span>Current dashboard permission label</span></div><span>Administrator</span></div><div class="setting-row"><div><strong>Login protection</strong><span>Configure authentication in your Laravel auth module</span></div><span class="status pending">Review</span></div><div class="setting-row"><div><strong>Session status</strong><span>Current browser session</span></div><span class="status">Active</span></div><button class="page-button secondary" style="margin-top:15px" onclick="showRecord('Security settings','Connect these controls to your Laravel authentication settings for production use.')">Review security options</button></section>
</div><p class="footer-note">These preferences are currently interface-level settings. Persist them in Laravel/database if you want them to remain saved after reload.</p></main>

@else
<main class="page-content"><section class="panel"><h2>Page not found</h2><p style="margin:12px 0;color:var(--muted)">Select a section from the navigation menu.</p><a class="page-button" href="{{ route('admin.dashboard',['page'=>'dashboard']) }}">Back to Dashboard</a></section></main>
@endif
</div>

<script>
function showRecord(title,details){alert(title+'\n\n'+details)}
function setupTableFilter(tableId,searchId,statusId,statusColumn){
const table=document.getElementById(tableId),search=document.getElementById(searchId),status=document.getElementById(statusId);
if(!table)return;
function apply(){
const q=search?search.value.toLowerCase().trim():'';
const s=status?status.value.toLowerCase():'all';
table.querySelectorAll('tbody tr').forEach(row=>{
const cells=row.querySelectorAll('td');
const text=row.innerText.toLowerCase();
const statusText=statusColumn!==undefined&&cells[statusColumn]?cells[statusColumn].innerText.toLowerCase().trim():'';
row.style.display=text.includes(q)&&(s==='all'||statusText.includes(s)||((s==='active'||s==='new'||s==='inactive')&&row.dataset.status===s))?'':'none';
});
}
if(search)search.addEventListener('input',apply);
if(status)status.addEventListener('change',apply);
}
setupTableFilter('bookingsTable','bookingSearch','bookingStatus',6);
setupTableFilter('paymentsTable','paymentSearch','paymentStatus',6);
setupTableFilter('customersTable','customerSearch','customerStatus',6);

const destinationSearch=document.getElementById('destinationSearch');
const destinationRegion=document.getElementById('destinationRegion');
function filterDestinations(){
const q=destinationSearch?destinationSearch.value.toLowerCase().trim():'';
const region=destinationRegion?destinationRegion.value:'all';
document.querySelectorAll('#destinationGrid .destination-card').forEach(card=>{
card.style.display=card.innerText.toLowerCase().includes(q)&&(region==='all'||card.dataset.region===region)?'':'none';
});
}
if(destinationSearch)destinationSearch.addEventListener('input',filterDestinations);
if(destinationRegion)destinationRegion.addEventListener('change',filterDestinations);

const guideSearch=document.getElementById('guideSearch'),guideStatus=document.getElementById('guideStatus');
function filterGuides(){
const q=guideSearch?guideSearch.value.toLowerCase().trim():'',s=guideStatus?guideStatus.value:'all';
document.querySelectorAll('#guideGrid .guide-card').forEach(card=>card.style.display=card.innerText.toLowerCase().includes(q)&&(s==='all'||card.dataset.status===s)?'':'none');
}
if(guideSearch)guideSearch.addEventListener('input',filterGuides);
if(guideStatus)guideStatus.addEventListener('change',filterGuides);

const messageSearch=document.getElementById('messageSearch'),messageFilter=document.getElementById('messageFilter');
function filterMessages(){
const q=messageSearch?messageSearch.value.toLowerCase().trim():'',s=messageFilter?messageFilter.value:'all';
document.querySelectorAll('#messageList .message-card').forEach(card=>card.style.display=card.innerText.toLowerCase().includes(q)&&(s==='all'||card.dataset.status===s)?'':'none');
}
if(messageSearch)messageSearch.addEventListener('input',filterMessages);
if(messageFilter)messageFilter.addEventListener('change',filterMessages);
document.querySelectorAll('#messageList .message-card').forEach(card=>{
card.addEventListener('click',()=>{
document.querySelectorAll('#messageList .message-card').forEach(c=>c.classList.remove('selected'));
card.classList.add('selected');
document.getElementById('messageFrom').textContent='From '+card.dataset.name;
document.getElementById('messageSubject').textContent=card.dataset.subject;
document.getElementById('messageBody').textContent=card.dataset.detail;
document.getElementById('replyNotice').textContent='';
});
});
const saveReply=document.getElementById('saveReply');
if(saveReply)saveReply.addEventListener('click',()=>{
const draft=document.getElementById('replyMessage').value.trim();
document.getElementById('replyNotice').textContent=draft?'Draft prepared in this page. It has not been sent or saved to the database.':'Please write a reply before preparing a draft.';
});
const saveSettings=document.getElementById('saveSettings');
if(saveSettings)saveSettings.addEventListener('click',()=>{
const name=document.getElementById('adminName').value.trim();
if(!name){alert('Please enter a display name.');return}
document.querySelector('.profile-info strong').textContent=name;
alert('Display name updated for this page. Settings are not saved to the database.');
});

document.addEventListener('DOMContentLoaded',function(){
const canvas=document.getElementById('revenueChart');
if(canvas&&typeof Chart!=='undefined'){
const ctx=canvas.getContext('2d'),gradient=ctx.createLinearGradient(0,0,0,260);
gradient.addColorStop(0,'rgba(128,92,247,.35)');gradient.addColorStop(1,'rgba(128,92,247,0)');
const monthly=[32000,39000,62000,52000,48000,70000,62000,76000,58000,83500,104000,91000],weekly=[12000,18000,14500,22000,19000,28000,24000];
const chart=new Chart(ctx,{type:'line',data:{labels:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],datasets:[{data:monthly,borderColor:'#9878ff',backgroundColor:gradient,borderWidth:2.5,fill:true,tension:.4,pointRadius:3,pointHoverRadius:6,pointBackgroundColor:'#b49bff'}]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false},tooltip:{backgroundColor:'#181522',callbacks:{label:c=>'Revenue: Rs. '+Number(c.raw).toLocaleString('en-PK')}}},scales:{x:{grid:{display:false},ticks:{color:'#898297',font:{size:10}},border:{display:false}},y:{beginAtZero:true,grid:{color:'#ffffff0b'},ticks:{color:'#898297',font:{size:10},callback:v=>'Rs. '+v/1000+'k'},border:{display:false}}}}});
const period=document.getElementById('chartPeriod');
if(period)period.addEventListener('change',function(){if(this.value==='week'){chart.data.labels=['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];chart.data.datasets[0].data=weekly}else{chart.data.labels=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];chart.data.datasets[0].data=monthly}chart.update()});
}
const calendar=document.getElementById('calendar'),monthLabel=document.getElementById('calendarMonth'),prev=document.getElementById('prevMonth'),next=document.getElementById('nextMonth');
if(calendar&&monthLabel&&prev&&next){
const today=new Date();let current=new Date(2026,9,1);const bookingDays=[5,12,18,21,23,26];
function renderCalendar(){
calendar.innerHTML='';const year=current.getFullYear(),month=current.getMonth();
monthLabel.textContent=current.toLocaleDateString('en-US',{month:'long',year:'numeric'});
['S','M','T','W','T','F','S'].forEach(d=>{const el=document.createElement('div');el.className='weekday';el.textContent=d;calendar.appendChild(el)});
const first=new Date(year,month,1).getDay(),total=new Date(year,month+1,0).getDate(),previousTotal=new Date(year,month,0).getDate();
for(let i=0;i<42;i++){const el=document.createElement('div');el.className='day';let day,date;
if(i<first){day=previousTotal-first+i+1;date=new Date(year,month-1,day);el.classList.add('muted')}
else if(i>=first+total){day=i-first-total+1;date=new Date(year,month+1,day);el.classList.add('muted')}
else{day=i-first+1;date=new Date(year,month,day);if(month===9&&bookingDays.includes(day))el.classList.add('event')}
if(date.getDate()===today.getDate()&&date.getMonth()===today.getMonth()&&date.getFullYear()===today.getFullYear())el.classList.add('today');
el.textContent=day;calendar.appendChild(el)}
}
prev.addEventListener('click',()=>{current=new Date(current.getFullYear(),current.getMonth()-1,1);renderCalendar()});
next.addEventListener('click',()=>{current=new Date(current.getFullYear(),current.getMonth()+1,1);renderCalendar()});renderCalendar();
}
});
</script>
</body>
</html>
