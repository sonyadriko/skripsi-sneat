<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\KetuaJurusanController;
use App\Http\Controllers\AuthController;


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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', 'AuthController@login');

Route::get('/proposal', function () {
    return view('proposal/index');
});
Route::get('/progress_bimbingan', function () {
    return view('progress_bimbingan/index');
});

// Grup rute untuk Mahasiswa (hanya pengguna dengan peran 'mahasiswa' yang bisa mengakses)
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('mahasiswa/dashboard', [MahasiswaController::class, 'dashboard'])->name('mahasiswa.dashboard');
    // Tambahkan rute lain yang hanya bisa diakses oleh mahasiswa
});

// Grup rute untuk Dosen (hanya pengguna dengan peran 'dosen' yang bisa mengakses)
Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('dosen/dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');
    // Tambahkan rute lain yang hanya bisa diakses oleh dosen
});

// Grup rute untuk Koordinator (hanya pengguna dengan peran 'koordinator' yang bisa mengakses)
Route::middleware(['auth', 'role:koordinator'])->group(function () {
    Route::get('koordinator/dashboard', [KoordinatorController::class, 'dashboard'])->name('koordinator.dashboard');
    // Tambahkan rute lain yang hanya bisa diakses oleh koordinator
});

// Grup rute untuk Ketua Jurusan (hanya pengguna dengan peran 'ketua_jurusan' yang bisa mengakses)
Route::middleware(['auth', 'role:ketua_jurusan'])->group(function () {
    Route::get('ketua_jurusan/dashboard', [KetuaJurusanController::class, 'dashboard'])->name('ketua_jurusan.dashboard');
    // Tambahkan rute lain yang hanya bisa diakses oleh ketua jurusan
});