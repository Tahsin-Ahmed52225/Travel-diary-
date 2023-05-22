<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;


Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [PassportAuthController::class, 'login']);
});

Route::middleware('auth:api')->group(function () {
    Route::get('auth', function ()
    {
        dd(Auth::user());
    });
});
