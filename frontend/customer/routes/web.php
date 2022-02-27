<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SearchController;
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
Route::get('/best-rooms', [RoomController::class, 'index']);
Route::get('/detail/{id}', [RoomController::class, 'show']);

// AUTH
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'loginAuth']);
Route::post('/register', [AuthController::class, 'regAuth']);
Route::get('/logout', [AuthController::class, 'logout']);


// PROFILE
Route::get('/profile/{id}', [UserController::class, 'index']);

// SEARCH
Route::post('/search', [RoomController::class, 'search']);
