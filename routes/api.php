<?php

use App\Http\Controllers\Auth\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function () {
    Route::post('login', [UserController::class, 'login']);
    Route::post('create', [UserController::class, 'createUser']);
    Route::get('{email}', [UserController::class, 'findByEmail']);
    Route::delete('{id}', [UserController::class, 'deleteUser']);
});
