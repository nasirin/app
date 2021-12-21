<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FasilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NecessitiController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/profile', [UserController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);

// ROOMS
Route::resource('/room', RoomController::class);

// BOOKING
Route::resource('/booking', BookingController::class);

// necessities
Route::resource('/necessities', NecessitiController::class);

// fasility
Route::resource('/fasility', FasilityController::class);

// ADMIN
Route::resource('/admin', AdminController::class);

// CUSTOMER
Route::resource('/customer', CustomerController::class);
