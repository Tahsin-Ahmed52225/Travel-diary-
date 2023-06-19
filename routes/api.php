<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{RegisterController,LoginController};
use App\Http\Controllers\SystemRoleController;

Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [LoginController::class, 'login']);
});

Route::group(['middleware' => ['cors', 'json.response','auth:api']], function () {
    Route::get('auth-test', function () {
        return response()->json(["message" => "Authentication successful"]);
    });
    Route::resource('role', SystemRoleController::class);
    Route::post('logout', [LoginController::class, 'logout']);
});

