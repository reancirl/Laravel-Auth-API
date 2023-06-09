<?php

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
    // return view('welcome');
    return response()->json([
        'message' => 'Logged in'
    ]);
});

Route::get('/api/reset-password/{token}', function($token){
    return response()->json([
        'token' => $token,
    ]);
})->name('password.reset');
