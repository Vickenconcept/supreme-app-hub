<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JVZooWebhookController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResellerController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

Route::get('/', function () {
    return view('welcome');
});




Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
    Route::view('register/success', 'auth.success')->name('register.success');
    // Route::view('detail', 'auth.web-detail')->name('detail');


    Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function () {
        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login');
    });
    Route::controller(PasswordResetController::class)->group(function () {
        Route::get('forgot-password', 'index')->name('password.request');
        Route::post('forgot-password', 'store')->name('password.email');
        Route::get('/reset-password/{token}', 'reset')->name('password.reset');
        Route::post('/reset-password', 'update')->name('password.update');
    });
});





Route::middleware(['auth'])->group(function () {
    Route::get('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/home', function () {
        return view('dashboard');
    })->name('home');

    Route::patch('/notifications/{notification}/read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');

    // Mark all notifications as read
    Route::patch('/notifications/read-all', [NotificationController::class, 'markAllAsRead'])->name('notifications.markAllAsRead');

    Route::view('profile', 'profile')->name('profile');
    Route::post('profile/name', [ProfileController::class, 'changeName'])->name('changeName');
    Route::post('profile/password', [ProfileController::class, 'changePassword'])->name('changePassword');

    Route::resource('reseller', ResellerController::class);
    Route::delete('/users/{user}', [ResellerController::class, 'destroy'])->name('users.destroy');


    Route::view('/dfy-sales-pages', 'dfy_sales_pages')->name('dfy_sales_pages.index');
    Route::view('/traffic-training', 'traffic_training')->name('traffic_training.index');
    Route::view('/dfy-convert-swipes', 'dfy_convert_swipes')->name('dfy_convert_swipes.index');
    Route::view('/solo-ads-vendors', 'solo_ads_vendors')->name('solo_ads_vendors.index');
    Route::view('/affiliate-training', 'affiliate_training')->name('affiliate_training.index');
    Route::view('/dfy-sales-setup', 'dfy_sales_setup')->name('dfy_sales_setup.index');
    Route::view('/dfy-agency-setup', 'dfy_agency_setup')->name('dfy_agency_setup.index');
    Route::view('/8-week-coaching-program', '8_week_coaching_program')->name('8_week_coaching_program.index');
    Route::view('/unlimited-traffic', 'unlimited_traffic')->name('unlimited_traffic.index');
    Route::view('/support', 'support')->name('support.index');
});


Route::post('/ipn/jvzoo', [JVZooWebhookController::class, 'JVZoo']);
