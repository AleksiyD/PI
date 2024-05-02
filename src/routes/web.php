<?php

use App\Http\Controllers\ClientVerificationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', IndexController::class)->name('index');
Route::post('/send-feedback', FeedbackController::class)->name('feedback');
Route::name('client.')->prefix('client')->group(function() {
    Route::controller(ClientVerificationController::class)->name('verify.')->prefix('verify')->group(function() {
        Route::get('/initial/{client}', 'initial')->name('initial');
        Route::get('/notice/{client}', 'notice')->name('notice');
        Route::get('/check/{token}', 'check')->name('check');
    });
});

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
