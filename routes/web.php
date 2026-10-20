<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TravelPackageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TripEnquiryController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackageController as AdminPackageController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingsController;

/*
|--------------------------------------------------------------------------
| TravelEase Website
|--------------------------------------------------------------------------
*/

// Website Homepage
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

/*
|--------------------------------------------------------------------------
| Customer Side
|--------------------------------------------------------------------------
*/

// Travel Packages
Route::resource('packages', TravelPackageController::class);

// Customer Bookings
Route::get('/bookings', function () {
    return redirect()->route('bookings.create');
})->name('bookings.index');

Route::get('/bookings/create', [BookingController::class, 'create'])
    ->name('bookings.create');

Route::post('/bookings', [BookingController::class, 'store'])
    ->name('bookings.store');

/*
|--------------------------------------------------------------------------
| Plan Your Trip
|--------------------------------------------------------------------------
*/

Route::get('/plan-trip', [TripEnquiryController::class, 'create'])
    ->name('trip.plan');

Route::post('/plan-trip', [TripEnquiryController::class, 'store'])
    ->name('trip.plan.submit');

/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Manage Packages
    Route::resource('packages', AdminPackageController::class);

    // Manage Bookings
    Route::resource('bookings', AdminBookingController::class);

    // Manage Payments
    Route::resource('payments', AdminPaymentController::class);

});

/*
|--------------------------------------------------------------------------
| Admin Profile
|--------------------------------------------------------------------------
*/

Route::get('/admin/profile', [ProfileController::class, 'edit'])
    ->name('admin.profile');

Route::put('/admin/profile', [ProfileController::class, 'update'])
    ->name('admin.profile.update');

/*
|--------------------------------------------------------------------------
| Admin Settings
|--------------------------------------------------------------------------
*/

Route::get('/admin/settings', [SettingsController::class, 'index'])
    ->name('admin.settings');

Route::put('/admin/settings', [SettingsController::class, 'update'])
    ->name('admin.settings.update');

/*
|--------------------------------------------------------------------------
| End of Routes
|--------------------------------------------------------------------------
*/