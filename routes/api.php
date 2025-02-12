<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::prefix('users')->group(function () {
    Route::get('get_user_info', [UserController::class, 'getUserInfo'])->name('users.get_user_info');
});