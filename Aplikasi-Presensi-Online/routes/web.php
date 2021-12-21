<?php

use App\Http\Controllers\AttdetailController;
use App\Http\Controllers\AttendanceController;
use App\Models\Attdetail;
use App\Models\Attendance;
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
Route::get('/siswa/absen', [AttendanceController::class, 'index'])->name('absen')->middleware('isSiswa');
Route::post('/siswa/absen', [AttdetailController::class, 'create'])->name('absen')->middleware('isSiswa');

Route::get('/siswa/absensi', [AttdetailController::class, 'index'])->name('absensi')->middleware('isSiswa');
Route::get('/siswa/cetak-absen-siswa', [AttdetailController::class, 'indexCetak'])->name('data-siswa')->middleware('isSiswa');

// Halaman Guru
Route::get('/guru/absensi-siswa', function () {
    return view('guru/dataAbsensi');
})->name('absensi-siswa')->middleware('isGuru');

Route::get('/guru/data-siswa', function () {
    return view('guru/dataSiswa');
})->name('data-siswa')->middleware('isGuru');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
