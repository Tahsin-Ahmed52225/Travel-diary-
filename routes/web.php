<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/login', function (Request $request) {
    if (!empty($request->error) && $request->error == "unauthorized")
    {
        return response()->json(['error' => 'Unauthorised'], 401);
    } else {
        return response()->json(['success' => 'Login Page'], 200);
    }
})->name('login');
