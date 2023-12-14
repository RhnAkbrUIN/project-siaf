<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiDosenController;
use App\Http\Controllers\MatkulDosenController;
use App\Http\Controllers\AkunPenggunaController;
use App\Http\Controllers\DosenPengampuController;
use App\Http\Controllers\MahasiswaDosenController;
use App\Http\Controllers\NilaiMahasiswaController;
use App\Http\Controllers\MatkulMahasiswaController;

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

Route::redirect('/', '/login', 301);

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard/admin', [HomeController::class, 'admin'])->name('dashboard-admin');
    Route::get('/dashboard/dosen', [HomeController::class, 'dosen'])->name('dashboard-dosen');
    Route::get('/dashboard/mahasiswa', [HomeController::class, 'mahasiswa'])->name('dashboard-mahasiswa');
});

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

// Route Hak Akses Admin
Route::get('/dashboard/laporan', [LaporanController::class, 'index'])->name('laporan');
Route::resource('akun-pengguna', AkunPenggunaController::class);
Route::resource('matakuliah', MatkulController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);
Route::resource('nilai', NilaiController::class);
Route::resource('pengampu', DosenPengampuController::class);

// Route Hak Akses Dosen
Route::resource('dosen-matakuliah', MatkulDosenController::class);
Route::resource('dosen-mahasiswa', MahasiswaDosenController::class);
Route::resource('dosen-nilai', NilaiDosenController::class);

// Route Hak Akses Mahasiswa
Route::resource('mahasiswa-matakuliah', MatkulMahasiswaController::class);
Route::resource('mahasiswa-nilai', NilaiMahasiswaController::class);


Auth::routes();