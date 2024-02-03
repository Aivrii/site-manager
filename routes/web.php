<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('payments', [PaymentController::class, 'index'])->name('payments.index');
});
