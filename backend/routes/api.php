<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KebutuhanController;
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
Route::put('/employee/{id}', [EmployeeController::class, 'change']);
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy']);
Route::post('/employee', [EmployeeController::class, 'store']);

//EMPLOYEES
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/{id}', [CustomerController::class, 'show']);
Route::put('/customer/{id}', [CustomerController::class, 'change']);
Route::delete('/customer/{id}', [CustomerController::class, 'destroy']);
Route::post('/customer', [CustomerController::class, 'store']);

//necessities
Route::get('/necessities', [KebutuhanController::class, 'index']);
Route::get('/necessities/{id}', [KebutuhanController::class, 'show']);
Route::patch('/necessities/{id}', [KebutuhanController::class, 'change']);
Route::delete('/necessities/{id}', [KebutuhanController::class, 'destroy']);
Route::post('/necessities', [KebutuhanController::class, 'store']);
