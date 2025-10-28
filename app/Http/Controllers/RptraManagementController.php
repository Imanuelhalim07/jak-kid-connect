<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rptra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Digunakan untuk menghapus file gambar

class RptraManagementController extends Controller
{
    /**
     * Menampilkan daftar semua RPTRA (manage-rptra.php).
     */
    public function index()
    {
        $rptras = Rptra::all();
        return view('admin.rptras.index', compact('rptras'));
    }

    /**
     * Menampilkan formulir untuk membuat RPTRA baru (add-rptra.php).
     */
    public function create()
    {
        return view('admin.rptras.create');
    }

    /**
     * Menyimpan RPTRA yang baru dibuat ke database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'city_region' => 'required|string',
            'fasilitas' => 'nullable|string',
            'jam' => 'nullable|string',
            'kontak' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Max 2MB
        ]);

        if ($request->hasFile('image')) {
            // Simpan file di public/assets/images/rptra
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('assets/images'), $imageName);
            $validatedData['image'] = 'assets/images/' . $imageName;
        }

        Rptra::create($validatedData);

        return redirect()->route('admin.rptras.index')->with('success', 'RPTRA berhasil ditambahkan!');
    }

    /**
     * Menampilkan formulir untuk mengedit RPTRA (edit-rptra.php).
     */
    public function edit(Rptra $rptra)
    {
        return view('admin.rptras.edit', compact('rptra'));
    }

    /**
     * Memperbarui RPTRA di database.
     */
    public function update(Request $request, Rptra $rptra)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'city_region' => 'required|string',
            'fasilitas' => 'nullable|string',
            'jam' => 'nullable|string',
            'kontak' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada dan merupakan file yang ada
            if ($rptra->image && file_exists(public_path($rptra->image))) {
                unlink(public_path($rptra->image));
            }

            // Simpan file baru
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('assets/images'), $imageName);
            $validatedData['image'] = 'assets/images/' . $imageName;
        }

        $rptra->update($validatedData);

        return redirect()->route('admin.rptras.index')->with('success', 'RPTRA berhasil diperbarui!');
    }

    /**
     * Menghapus RPTRA dari database.
     */
    public function destroy(Rptra $rptra)
    {
        // Hapus file gambar terkait
        if ($rptra->image && file_exists(public_path($rptra->image))) {
            unlink(public_path($rptra->image));
        }

        $rptra->delete();

        return redirect()->route('admin.rptras.index')->with('success', 'RPTRA berhasil dihapus.');
    }
}
