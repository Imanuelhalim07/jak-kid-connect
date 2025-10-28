<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // Panggil seeder user di sini (untuk membuat admin awal)
            UserSeeder::class,

            // Panggil seeder data
            RptraSeeder::class,
            KegiatanSeeder::class, // Anda harus membuat KegiatanSeeder juga (contoh di bawah)
        ]);
    }
}
