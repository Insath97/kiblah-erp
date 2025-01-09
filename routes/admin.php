<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    /* login */
    Route::get('login', [AuthController::class, 'login'])->name('login');
});
