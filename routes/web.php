<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-index');

    Route::resource('/siswa', SiswaController::class)->middleware('auth');
    Route::resource('/jurusan', JurusanController::class)->middleware('auth');
    Route::resource('/mapel', MataPelajaranController::class)->middleware('auth');
    Route::resource('/class', KelasController::class)->middleware('auth');
    Route::resource('/galeri', GaleryController::class)->middleware('auth');
    Route::resource('/guru', GuruController::class)->middleware('auth');
});



Route::resource('/halaman', HalamanController::class);
Route::get('profil', [ProfileController::class, 'index'])->name('profil');
Route::get('halamanDataGuru', [GuruController::class, 'show'])->name('halamanDataGuru');
Route::get('halamanGallery', [GaleryController::class, 'show'])->name('halamanGallery');
Route::get('/kontak', function () {
    return view('halamanKontak');
})->name('kontak');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/halaman', [HalamanController::class, 'index'])->name('halaman-index');

Route::get('/', function () {
    return view('welcome');
});
