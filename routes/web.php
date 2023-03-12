<?php

use Illuminate\Support\Facades\Route;

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

// All dashboard routes (index, create, store, etc.)
require __DIR__.'/dashboard.php';

// Breeze routes (login, register, logout, etc.)
require __DIR__.'/auth.php';
