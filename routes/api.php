<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{RegisterController,LoginController};

Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [LoginController::class, 'login']);
});

Route::group(['middleware' => ['cors', 'json.response','auth:api']], function () {
    Route::get('auth-test', function () {
        return response()->json(["message" => "Authentication successful"]);
    });
    Route::post('logout', [LoginController::class, 'logout']);
});

