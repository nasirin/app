<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//EMPLOYEES
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/{id}', [EmployeeController::class, 'show']);
Route::patch('/employee/{id}', [EmployeeController::class, 'change']);
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy']);
Route::post('/employee', [EmployeeController::class, 'store']);

//EMPLOYEES
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/{id}', [CustomerController::class, 'show']);
Route::patch('/customer/{id}', [CustomerController::class, 'change']);
Route::delete('/customer/{id}', [CustomerController::class, 'destroy']);
Route::post('/customer', [CustomerController::class, 'store']);

//necessities
Route::get('/necessities', [KebutuhanController::class, 'index']);
Route::get('/necessities/{id}', [KebutuhanController::class, 'show']);
Route::patch('/necessities/{id}', [KebutuhanController::class, 'change']);
Route::delete('/necessities/{id}', [KebutuhanController::class, 'destroy']);
Route::post('/necessities', [KebutuhanController::class, 'store']);

//booking
Route::get('/booking', [BookingController::class, 'index']);
Route::get('/booking/{id}', [BookingController::class, 'show']);
Route::patch('/booking/{id}', [BookingController::class, 'change']);
Route::delete('/booking/{id}', [BookingController::class, 'destroy']);
Route::post('/booking', [BookingController::class, 'store']);

//room
Route::get('/room', [RoomController::class, 'index']);
Route::get('/room/{id}', [RoomController::class, 'show']);
Route::patch('/room/{id}', [RoomController::class, 'change']);
Route::delete('/room/{id}', [RoomController::class, 'destroy']);
Route::post('/room', [RoomController::class, 'store']);
