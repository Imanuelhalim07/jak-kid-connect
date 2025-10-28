<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RptraController; // Digunakan untuk rute front-end RPTRA

// Controller Admin
use App\Http\Controllers\Admin\RptraManagementController;
use App\Http\Controllers\Admin\KegiatanManagementController;
use App\Http\Controllers\Admin\UserManagementController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| FRONT-END ROUTES (Rute untuk Pengguna Umum)
|--------------------------------------------------------------------------
*/

// Rute Halaman Default (Welcome) dan Beranda
Route::view('/welcome', 'welcome')->name('welcome'); // Rute /welcome
Route::view('/', 'beranda')->name('home'); // Rute / (Beranda)

// Rute Halaman Statis dengan Route::view()
Route::view('/tentang-kami', 'tentang-kami')->name('about');


// Rute Hak Anak, Konvensi, dan Pre-Test
Route::prefix('hak-anak')->group(function () {
    // Rute utama /hak-anak (diasumsikan menampilkan kluster-hak-anak.blade.php)
    Route::get('/', [RptraController::class, 'showHakAnak'])->name('hak-anak');

    // Rute ke halaman Teks Konvensi lengkap
    Route::view('/konvensi', 'konvensi-hak-anak')->name('konvensi');

    // Rute Pre-Test (Biasanya statis atau sederhana)
    Route::view('/pre-test', 'pre-test')->name('pre-test.show');
});


// Rute Post-Test (Menggunakan Controller untuk logika kuis)
Route::get('/post-test', [QuizController::class, 'showPostTest'])->name('post-test.show');
Route::post('/post-test', [QuizController::class, 'submitPostTest'])->name('post-test.submit');


// Rute Cari RPTRA (Menggunakan Controller untuk mengambil data)
Route::get('/cari-rptra', [RptraController::class, 'index'])->name('rptra.index');


// Rute Daftar Kegiatan (Asumsikan Anda akan membuat KegiatanController untuk front-end)
// Jika Anda ingin menggunakan RptraController untuk kegiatan, ganti nama controllernya.
// Di sini saya asumsikan Anda akan membuat Controller baru untuk kegiatan front-end.
// --- Jika menggunakan View statis saja:
Route::view('/kegiatan', 'kegiatan-ramah-anak')->name('kegiatan.index');


/*
|--------------------------------------------------------------------------
| ADMIN PANEL ROUTES (Rute untuk Pengelola/Admin)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Manajemen RPTRA
    Route::resource('rptras', RptraManagementController::class)->except(['show']);

    // Manajemen Kegiatan
    Route::resource('kegiatans', KegiatanManagementController::class)->except(['show']);

    // Manajemen Users
    Route::resource('users', UserManagementController::class)->except(['show']);
});
