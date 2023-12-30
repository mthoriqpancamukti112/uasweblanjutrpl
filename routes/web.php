<?php

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


Route::resource('/siswa', SiswaController::class);
Route::resource('/jurusan', JurusanController::class);
Route::resource('/mapel', MataPelajaranController::class);
Route::resource('/class', KelasController::class);
Route::resource('/galeri', GaleryController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/halaman', HalamanController::class);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('profil', [ProfileController::class, 'index'])->name('profil');
Route::get('halamanDataGuru', [GuruController::class, 'show'])->name('halamanDataGuru');
Route::get('halamanGallery', [GaleryController::class, 'show'])->name('halamanGallery');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('halamanAdmin');
})->name('halamanAdmin');

Route::get('/kontak', function () {
    return view('halamanKontak');
})->name('kontak');
