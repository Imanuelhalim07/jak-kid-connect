<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rptra;

class RptraSeeder extends Seeder
{
    public function run(): void
    {
        $rptraData = [
            [
                'name' => 'RPTRA Tanjung Elang',
                'address' => '7J36+5R5, Pulau Pramuka, Pulau Panggang, Kepulauan Seribu Utara, Kab. Administrasi Kepulauan Seribu, DKI Jakarta 14530',
                'city_region' => 'Kepulauan Seribu',
                'fasilitas' => 'Taman bermain, ruang serbaguna, perpustakaan, ruang laktasi.',
                'jam' => 'Data tidak tersedia',
                'kontak' => 'Data tidak tersedia',
                'image' => 'assets/images/tanjung-elang.png' // Pastikan gambar ini ada di public/assets/images
            ],
            [
                'name' => 'RPTRA Amiterdam',
                'address' => '2PC5+44Q, Unnamed Road, Pulau Untung Jawa, Kec. Kepulauan Seribu Sel., Kab. Administrasi Kepulauan Seribu, DKI Jakarta 14510',
                'city_region' => 'Kepulauan Seribu',
                'fasilitas' => 'Lapangan olahraga, area hijau, gazebo, tempat sampah.',
                'jam' => 'Data tidak tersedia',
                'kontak' => 'Data tidak tersedia',
                'image' => 'assets/images/amiterdam.png'
            ],
            // ... (Tambahkan data RPTRA Anda yang lain di sini) ...
            [
                'name' => 'RPTRA Kenanga',
                'address' => 'Jl. Obira No.26 2, RT.2/RW.5, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, DKI Jakarta 10150',
                'city_region' => 'Jakarta Pusat',
                'fasilitas' => 'Ruang bermain, area parkir, kantin.',
                'jam' => 'Buka - Tutup pukul 22.00',
                'kontak' => 'Data tidak tersedia',
                'image' => 'assets/images/kenanga.png'
            ],
        ];

        foreach ($rptraData as $data) {
            Rptra::create($data);
        }

        // Opsional: Buat 10 data RPTRA palsu tambahan untuk pengujian
        Rptra::factory()->count(10)->create();
    }
}
