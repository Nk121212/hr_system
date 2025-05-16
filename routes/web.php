<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'pageHome'])->name('page_home');
Route::get('/home', [HomeController::class, 'pageHome'])->name('page_home');
Route::get('/organisasi', [HomeController::class, 'pageOrganisasi'])->name('page_organisasi');
Route::get('/karyawan', [HomeController::class, 'pageKaryawan'])->name('page_karyawan');
Route::get('/absensi', [HomeController::class, 'pageAbsensi'])->name('page_absensi');
Route::get('/payroll', [HomeController::class, 'pagePayroll'])->name('page_payroll');
Route::get('/bpjs', [HomeController::class, 'pageBpjs'])->name('page_bpjs');
Route::get('/hrd', [HomeController::class, 'pageHrd'])->name('page_hrd');
