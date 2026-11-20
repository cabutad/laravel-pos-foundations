<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

// Public routes
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);

// Customer account routes (protected with auth middleware) - resource route
Route::resource('customers', CustomerController::class)
    ->names('customers')
    ->middleware('auth');

// User account routes (protected with auth middleware) - resource route
Route::resource('users', UserController::class)
    ->names('users')
    ->middleware('auth');
