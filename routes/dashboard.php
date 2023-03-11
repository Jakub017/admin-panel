<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;




Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard', 'home')->middleware(['auth', 'verified'])->name('dashboard.home');
    Route::get('/dashboard/clients', 'clients')->middleware(['auth', 'verified'])->name('dashboard.clients');
    Route::get('/dashboard/services', 'services')->middleware(['auth', 'verified'])->name('dashboard.services');
    Route::get('/dashboard/users', 'users')->middleware(['auth', 'verified'])->name('dashboard.users');
    Route::get('/dashboard/posts', 'posts')->middleware(['auth', 'verified'])->name('dashboard.posts');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});