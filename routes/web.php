<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Tampilkan form login
Route::get('/', [LoginController::class, 'index'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'authentication'])->name('login.post');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard role-based
Route::get('/admin/dashboard', function () {
    return view('Auth.admin.dashboard'); 
})->middleware(['auth', 'Role:admin']);

Route::get('/kepala/dashboard', function () {
    return view('kepala.dashboard'); 
})->middleware(['auth', 'Role:kepala']);

Route::get('/petugas/dashboard', function () {
    return view('petugas.dashboard'); 
})->middleware(['auth', 'Role:petugas']);

Route::get('/perawat/dashboard', function () {
    return view('perawat.dashboard'); 
})->middleware(['auth', 'Role:perawat']);
