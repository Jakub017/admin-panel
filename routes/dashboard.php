<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;




// Route::controller(DashboardController::class)->group(function(){
//     Route::get('/dashboard', 'home')->middleware(['auth', 'verified'])->name('dashboard.home');
//     Route::get('/dashboard/clients', 'clients')->middleware(['auth', 'verified'])->name('dashboard.clients');
//     Route::get('/dashboard/services', 'services')->middleware(['auth', 'verified'])->name('dashboard.services');
//     Route::get('/dashboard/users', 'users')->middleware(['auth', 'verified'])->name('dashboard.users');
//     Route::get('/dashboard/posts', 'posts')->middleware(['auth', 'verified'])->name('dashboard.posts');
// });

Route::get('/dashboard', function() {
    return view('dashboard.home');
})->middleware(['auth', 'verified'])->name('dashboard.home');

Route::controller(ServicesController::class)->group(function(){
    Route::get('/dashboard/services', 'index')->middleware(['auth', 'verified'])->name('services.index');
   
});

Route::controller(ClientsController::class)->group(function(){
    Route::get('/dashboard/clients', 'index')->middleware(['auth', 'verified'])->name('clients.index');
    Route::get('/dashboard/clients/add', 'create')->middleware(['auth', 'verified'])->name('clients.create');
    Route::get('/dashboard/client/{id}', 'show')->middleware(['auth', 'verified'])->name('clients.show');
    Route::get('/dashboard/client/{id}/edit', 'edit')->middleware(['auth', 'verified'])->name('clients.edit');

    Route::put('/dashboard/client/{id}', 'update')->middleware(['auth', 'verified'])->name('clients.update');
    Route::put('/dashboard/clients/new', 'store')->middleware(['auth', 'verified'])->name('clients.store');
    Route::delete('/dashboard/client/{id}', 'destroy')->middleware(['auth', 'verified'])->name('clients.destroy');
});

Route::controller(PostsController::class)->group(function(){
    Route::get('/dashboard/posts', 'index')->middleware(['auth', 'verified'])->name('posts.index');
});

Route::controller(UsersController::class)->group(function(){
    Route::get('/dashboard/users', 'index')->middleware(['auth', 'verified'])->name('users.index');
});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});