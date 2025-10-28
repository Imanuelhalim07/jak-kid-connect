<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanManagementController extends Controller
{
    public function index() { /* ... (Logika sama seperti sebelumnya) */ }
    public function create() { /* ... (Logika sama seperti sebelumnya) */ }
    public function edit(Kegiatan $kegiatan) { /* ... (Logika sama seperti sebelumnya) */ }

    // Simpan Kegiatan Baru (Menggantikan proses di add-kegiatan.php)
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Untuk upload file
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images/kegiatan'), $imageName);
            $validatedData['image'] = 'assets/images/kegiatan/' . $imageName;
        }

        Kegiatan::create($validatedData);

        return redirect()->route('admin.kegiatans.index')->with('success', 'Kegiatan baru berhasil ditambahkan.');
    }

    // Perbarui Kegiatan (Menggantikan proses di edit-kegiatan.php)
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        // Cek dan proses upload gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama (jika ada)
            // Storage::delete($kegiatan->image); // Gunakan Storage facade jika disimpan di storage
            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images/kegiatan'), $imageName);
            $validatedData['image'] = 'assets/images/kegiatan/' . $imageName;
        }

        $kegiatan->update($validatedData);

        return redirect()->route('admin.kegiatans.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    // Hapus Kegiatan
    public function destroy(Kegiatan $kegiatan)
    {
        // Hapus file gambar jika ada
        // Storage::delete($kegiatan->image); 
        $kegiatan->delete();
        return redirect()->route('admin.kegiatans.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}