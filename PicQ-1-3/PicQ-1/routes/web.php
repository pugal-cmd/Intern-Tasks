<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BusinessEnquiryController;
use App\Http\Controllers\BusinessRequestController;
use App\Http\Controllers\VendorRegistrationController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Home Section Redirects
|--------------------------------------------------------------------------
*/

Route::get('/how-it-works', fn () => redirect('/#how-it-works'))
    ->name('how-it-works');

Route::get('/pricing', fn () => redirect('/#pricing'))
    ->name('pricing');

Route::get('/about', function () {
    return view('about');
})->name('about');

/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact.show');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

/*
|--------------------------------------------------------------------------
| Creators
|--------------------------------------------------------------------------
*/

Route::get('/creators', [CreatorController::class, 'index'])
    ->name('creators.index');

Route::get('/creators/{creator}', [CreatorController::class, 'show'])
    ->name('creators.show');

Route::get('/join-as-creator', [CreatorController::class, 'apply'])
    ->name('creators.apply');

Route::post('/join-as-creator', [CreatorController::class, 'storeApplication'])
    ->name('creators.apply.store');

/*
|--------------------------------------------------------------------------
| Booking
|--------------------------------------------------------------------------
*/

Route::get('/book', [BookingController::class, 'create'])
    ->name('booking.create');

Route::post('/book', [BookingController::class, 'store'])
    ->name('booking.store');

Route::get('/book/success', [BookingController::class, 'success'])
    ->name('booking.success');

/*
|--------------------------------------------------------------------------
| Business Enquiry
|--------------------------------------------------------------------------
*/

Route::post('/business-enquiry', [BusinessEnquiryController::class, 'store'])
    ->name('business-enquiry.store');

/*
|--------------------------------------------------------------------------
| Business Request
|--------------------------------------------------------------------------
*/

Route::post('/business-request', [BusinessRequestController::class, 'store'])
    ->name('business-request.store');

/*
|--------------------------------------------------------------------------
| Vendor Registration
|--------------------------------------------------------------------------
*/

Route::get('/vendor/register', [VendorRegistrationController::class, 'create'])
    ->name('vendor.register');

Route::post('/vendor/register', [VendorRegistrationController::class, 'store'])
    ->name('vendor.register.store');
use App\Http\Controllers\VendorRegistrationNewController;

Route::get('/join-vendor', [VendorRegistrationNewController::class, 'create'])
    ->name('vendor.join');

Route::post('/join-vendor', [VendorRegistrationNewController::class, 'store'])
    ->name('vendor.register.store');

Route::get('/vendor-list', [VendorRegistrationNewController::class, 'index'])
    ->name('vendor.list');
/*
|--------------------------------------------------------------------------
| Download Page
|--------------------------------------------------------------------------
*/

Route::get('/download', function () {
    return view('download');
})->name('download');


Route::get('/studio', function () {
    return view('studio');
})->name('studio');

Route::get('/reels', function () {
    return view('reels');
})->name('reels');

Route::get('/drone', function () {
    return view('drone');
})->name('drone');