<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::post('/tambah', [DashboardController::class, 'tambah'])->name('actionTambah');
Route::get('/tambah', function () {
    return view('tambah');
});
Route::get('/hapus/{id}', [DashboardController::class, 'hapus']);
Route::get('/edit/{id}', [DashboardController::class, 'editView']);
Route::post('/edit/{id}', [DashboardController::class, 'actionEdit']);
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');