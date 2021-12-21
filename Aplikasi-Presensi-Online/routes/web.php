<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

// Halaman siswa
Route::get('/siswa/absen', function () {
    return view('siswa/absen');
})->name('absen');
Route::get('/siswa/absensi', function () {
    return view('siswa/absensi');
})->name('absensi');

// Halaman Guru
Route::get('/guru/absensi-siswa', function () {
    return view('guru/dataAbsensi');
})->name('absensi-siswa');
Route::get('/guru/data-siswa', function () {
    return view('siswa/dataSiswa');
})->name('data-siswa');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
