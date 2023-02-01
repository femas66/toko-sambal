<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GantigambarController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('cekLogin')->name('dashboard');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'actionLogin'])->middleware('cekLogin')->name('actionLogin');
Route::post('/tambah', [DashboardController::class, 'tambah'])->middleware('cekLogin')->name('actionTambah');
Route::get('/tambah', function () {
    return view('tambah');
})->middleware('cekLogin')->name('tambah');
Route::get('/hapus/{id}', [DashboardController::class, 'hapus'])->middleware('cekLogin');
Route::get('/edit/{id}', [DashboardController::class, 'editView'])->middleware('cekLogin');
Route::post('/edit/{id}', [DashboardController::class, 'actionEdit']);
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
Route::get('/edit/img/{id}', [GantigambarController::class, 'editgambar'])->middleware('cekLogin');
Route::post('/updateimg', [GantigambarController::class, 'actionEditGambar']);