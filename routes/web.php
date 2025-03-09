<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('home');

// Define resource routes for UserController
Route::resource('users', UserController::class);

// Define the store route explicitly
Route::post('user/store', [UserController::class, 'store'])->name('user.store');