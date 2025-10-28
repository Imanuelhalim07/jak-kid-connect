<?php

namespace App\Http\Controllers; // <--- Perhatikan namespace ini.

use App\Models\Rptra;
use App\Models\Kegiatan;
use App\Models\User;
use App\Http\Controllers\Controller; // <--- Impor class Controller (Wajib di Laravel baru)

class AdminController extends Controller // <--- Extend Controller yang sudah di-impor
{
    public function dashboard()
    {
        // Pastikan Anda sudah menjalankan migrasi untuk tabel RPTRA dan Kegiatan.
        $totalRptra = Rptra::count();
        $totalKegiatan = Kegiatan::count();
        $totalUsers = User::count();

        return view('admin.dashboard', compact('totalRptra', 'totalKegiatan', 'totalUsers'));
    }
}
