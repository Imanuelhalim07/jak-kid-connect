<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 15 data kegiatan palsu untuk pengujian
        Kegiatan::factory()->count(15)->create();
    }
}
