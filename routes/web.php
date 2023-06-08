<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

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

// ------------------------------ ORDER ROUTES ------------------------------
// Show all orders
Route::get('/', [OrderController::class, 'index']);

// Show the create order form
Route::get('/orders/create', [OrderController::class, 'create']);

// Store Order data
Route::post('/orders', [OrderController::class, 'store']);

// Show edit Order
Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->middleware('auth');

// Update Order
Route::put('/orders/{order}', [OrderController::class, 'update'])->middleware('auth');

// Delete Order
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->middleware('auth');

// Manage Orders
Route::get('/orders/manage', [OrderController::class, 'manage'])->middleware('auth');


// ------------------------------ USER ROUTES ------------------------------
// Show register user form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Creat a new user
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');