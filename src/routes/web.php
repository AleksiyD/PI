<?php

use App\Http\Controllers\ClientVerificationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Manage\ManageController;
use App\Http\Livewire\Manage\ShowClients;
use App\Http\Livewire\Manage\ShowMainPage;
use App\Http\Livewire\Manage\ShowRequests;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('manage')->group(function() {
    Auth::routes([
        'register' => false,
        'reset' => false,
        'verify' => false
    ]);
    Route::middleware('auth')->name('manage.')->group(function() {
        // Route::get('/', ShowMainPage::class)->name('show-main-page');
        Route::get('/', ManageController::class)->name('show-main-page');
        Route::get('/clients', ShowClients::class)->name('show-clients');
        Route::get('/requests', ShowRequests::class)->name('show-requests');
        Route::get('/requests/{client}', ShowRequests::class)->name('show-requests-client');
    });
});
