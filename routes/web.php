<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

// Show all orders
Route::get('/', [OrderController::class, 'index']);

// Show the create order form
Route::get('/orders/create', [OrderController::class, 'create']);

// Store Order data
Route::post('/orders', [OrderController::class, 'store']);

// Delete Order
Route::delete('/orders/{order}', [OrderController::class, 'destroy']);

// Manage Orders
Route::get('/orders/manage', [OrderController::class, 'manage']);
