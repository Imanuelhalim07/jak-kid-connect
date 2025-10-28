<?php

namespace App\Http\Controllers;

use App\Models\Rptra;
use Illuminate\Http\Request;

class RptraController extends Controller
{
    /**
     * Menampilkan halaman pencarian RPTRA.
     * Meneruskan data RPTRA ke View untuk diproses oleh JavaScript.
     */
    public function index()
    {
        // Ambil semua data RPTRA dari database
        $rptraList = Rptra::all();

        // Mengonversi data RPTRA ke JSON untuk digunakan oleh JavaScript di View
        $rptraDataJson = $rptraList->toJson();

        return view('cari-rptra', compact('rptraDataJson'));
    }

    /**
     * Menampilkan halaman/view Hak Anak (menggantikan kluster-hak-anak.php atau konvensi-hak-anak.php).
     * Metode ini diasumsikan hanya menampilkan halaman statis.
     */
    public function showHakAnak()
    {
        // Ganti 'kluster-hak-anak' dengan nama view blade yang sesuai
        return view('kluster-hak-anak'); 
    }
}