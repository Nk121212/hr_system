<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/struktur_organisasi', [HomeController::class, 'strukturOrganisasi'])->name('struktur_organisasi');
Route::get('/data_karyawan', [HomeController::class, 'dataKaryawan'])->name('data_karyawan');
