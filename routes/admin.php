<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    /* login */
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'handleLogin'])->name('handle-login');

    /* logout */
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    /* forgot password */
    Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
    Route::post('forgot-password', [AuthController::class, 'sendResetPasswordLink'])->name('send-reset-password-link');

    /* reset password */
    Route::get('reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-password');
    Route::post('reset-password', [AuthController::class, 'updatePassword'])->name('update-password');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {

    /* dasboard */
    Route::get('dasboard', [DashboardController::class, 'index'])->name('dashboard');
});
