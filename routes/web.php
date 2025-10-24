<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    // Route untuk menampilkan form edit profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    // Route untuk update profil (PATCH method)
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Route untuk delete profil (opsional)
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';