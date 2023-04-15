<?php

use App\Http\Controllers\AppController as AppCtl;
use App\Http\Controllers\Auth\ForgotPasswordController as ForgotPasswordCtl;
use App\Http\Controllers\Auth\LoginController as LoginCtl;
use App\Http\Controllers\Auth\ResetPasswordController as ResetPasswordCtl;
use App\Http\Middleware\HandleInertiaRequests as HandleInertia;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginCtl::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginCtl::class, 'login']);

Route::post('logout', [LoginCtl::class, 'logout'])->name('logout');

Route::get('login/reset', [ForgotPasswordCtl::class, 'showLinkRequestForm'])->name('password.request');
Route::post('login/reset', [ForgotPasswordCtl::class, 'sendResetLinkEmail']);
Route::get('login/reset/{token}', [ResetPasswordCtl::class, 'showResetForm'])->name('password.reset');
Route::post('login/reset/{token}', [ResetPasswordCtl::class, 'reset']);

Route::middleware(['auth:web', HandleInertia::class])->group(function () {
    Route::get('/routes.json', [AppCtl::class, 'ziggy'])->name('ziggy');

    Route::get('/', [AppCtl::class, 'dashboard'])->name('dashboard');
});
