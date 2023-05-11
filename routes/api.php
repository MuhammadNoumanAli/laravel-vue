<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\Agency\DashboardController;

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


// Route::group(['middleware' => ['auth.agency']], function () {
//     // user routes
//     Route::GET('/agency/dashboard', [DashboardController::class, 'index'])->name('agency.dashboard.index');

// });

// Route::group(['middleware' => ['auth.admin']], function () {
//     // admin routes
// });

// Route::group(['middleware' => ['auth.superadmin']], function () {
//     // super admin routes
// });

Route::post('/login', [ApiAuthController::class, 'login'])->name('login.api');
Route::post('/register',[ApiAuthController::class, 'register'])->name('register.api');
Route::post('/logout', [ApiAuthController::class, 'logout'])->name('logout.api');

Route::middleware('auth.agency')->group(function () {
    // agency routes
    // dd('ddd');
    // Route::post('/login', [ApiAuthController::class, 'login'])->name('login.api');
    // Route::post('/register',[ApiAuthController::class, 'register'])->name('register.api');
    // Route::post('/logout', [ApiAuthController::class, 'logout'])->name('logout.api');

    Route::GET('/agency/dashboard', [DashboardController::class, 'index'])->name('agency.dashboard.index');

});

// Route::middleware('auth.admin')->group(function () {
//     // admin routes
// });

// Route::middleware('auth.super-admin')->group(function () {
//     // super admin routes
// });

