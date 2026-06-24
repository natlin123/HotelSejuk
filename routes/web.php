<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TipeKamarController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Booking
|--------------------------------------------------------------------------
*/

Route::get('/booking/{id}/{nama}',
    [BookingController::class, 'index']);

Route::post('/booking/store',
    [BookingController::class, 'store'])
    ->name('booking.store');

/*
|--------------------------------------------------------------------------
| Payment
|--------------------------------------------------------------------------
*/

Route::get('/payment',
    [BookingController::class, 'payment'])
    ->name('payment');

/*
|--------------------------------------------------------------------------
| Payment Details
|--------------------------------------------------------------------------
*/

Route::get('/payment-details/{id}',
    [PaymentController::class, 'show'])
    ->name('payment.show');

/*
|--------------------------------------------------------------------------
| Confirm Payment
|--------------------------------------------------------------------------
*/

Route::post('/payment/{id}/confirm',
    [PaymentController::class, 'confirm'])
    ->name('payment.confirm');

/*
|--------------------------------------------------------------------------
| Payment Success
|--------------------------------------------------------------------------
*/

Route::get('/payment-success/{id}',
    [PaymentController::class, 'success'])
    ->name('payment.success');

    Route::get('/receipt/pdf/{id}',
    [PaymentController::class, 'downloadPdf'])
    ->name('payment.pdf');


/*
|--------------------------------------------------------------------------
| Admin & Resepsionis
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {


Route::get('/dashboard',
        [DashboardController::class,'index'])
        ->name('dashboard');

Route::post('/logout',
        [AuthController::class,'logout'])
        ->name('logout');


 /*
    |--------------------------------------------------------------------------
    | Kamar
    |--------------------------------------------------------------------------
    */


    Route::resource('kamar', KamarController::class);

  /*
    |--------------------------------------------------------------------------
    | User
    |--------------------------------------------------------------------------
    */


    Route::resource('user', UserController::class);


    /*
    |--------------------------------------------------------------------------
    | Tipe & Tarif Kamar
    |--------------------------------------------------------------------------
    */


    Route::resource('tipe', TipeKamarController::class);
});
