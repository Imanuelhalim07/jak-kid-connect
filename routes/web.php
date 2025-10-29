<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RptraController; // Asumsi ini berisi logic untuk Cari RPTRA
use App\Http\Controllers\HakAnakController; // Asumsi controller baru untuk Kluster/Konvensi
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\RptraManagementController;
use App\Http\Controllers\Admin\KegiatanManagementController;
use App\Http\Controllers\Admin\UserManagementController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| AUTHENTICATION & REGISTRATION
|--------------------------------------------------------------------------
*/

// Rute Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Rute Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rute Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


/*
|--------------------------------------------------------------------------
| FRONT-END ROUTES (Rute untuk Pengguna Umum)
|--------------------------------------------------------------------------
*/

// Rute Halaman Utama
Route::view('/', 'beranda')->name('home');

// Rute Halaman Statis
Route::view('/tentang-kami', 'tentang-kami')->name('about'); // Menggunakan Blade 'tentang-kami'

// Catatan: Jika Anda membuat controller baru untuk Kluster/Konvensi, ganti Route::view dengan Route::get

// Rute Kluster Hak Anak
Route::view('/kluster-hak-anak', 'kluster-hak-anak')->name('kluster');

// Rute Konvensi Hak Anak, Pre-Test, dan Post-Test
Route::prefix('konvensi-hak-anak')->group(function () {
    Route::view('/', 'konvensi-hak-anak')->name('konvensi'); // Menggunakan Blade 'konvensi'
    Route::get('/pre-test', [QuizController::class, 'showPreTest'])->name('pretest');
    Route::get('/post-test', [QuizController::class, 'showPostTest'])->name('posttest');
    Route::post('/post-test', [QuizController::class, 'submitPostTest'])->name('posttest.submit');
});

// Rute Daftar Kegiatan Ramah Anak
Route::view('/kegiatan-ramah-anak', 'kegiatan-ramah-anak')->name('kegiatan.index');

// Rute Cari RPTRA
Route::get('/cari-rptra', [RptraController::class, 'index'])->name('rptra.index');


/*
|--------------------------------------------------------------------------
| ADMIN PANEL ROUTES (Rute untuk Pengelola/Admin)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Manajemen Resources
    Route::resource('rptras', RptraManagementController::class)->except(['show']);
    Route::resource('kegiatans', KegiatanManagementController::class)->except(['show']);
    Route::resource('users', UserManagementController::class)->except(['show']);
});
