<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::group(['middleware' => ['auth.user']], function () {
//     // user routes
// });

// Route::group(['middleware' => ['auth.admin']], function () {
//     // admin routes
// });

// Route::group(['middleware' => ['auth.superadmin']], function () {
//     // super admin routes
// });


Route::middleware('auth.agency')->group(function () {
    // user routes
    // public routes
    Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/register', 'Auth\ApiAuthController@register')->name('register.api');
});

Route::middleware('auth.admin')->group(function () {
    // admin routes
});

Route::middleware('auth.super-admin')->group(function () {
    // super admin routes
});

