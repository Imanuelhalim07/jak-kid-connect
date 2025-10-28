<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     */
    public function run(): void
    {
        // 1. Buat Akun Admin Utama
        User::create([
            'name' => 'Admin RPTRA',
            'email' => 'admin@rptra.com',
            'password' => Hash::make('password'), // Ganti 'password' dengan password yang lebih aman
            'role' => 'admin', // WAJIB: Setel role sebagai 'admin'
        ]);

        // 2. Buat Akun User Biasa (Opsional)
        User::create([
            'name' => 'User Biasa',
            'email' => 'user@rptra.com',
            'password' => Hash::make('password'),
            'role' => 'user', // Setel role sebagai 'user'
        ]);

        // 3. Buat beberapa User palsu menggunakan Factory (Opsional)
        // User::factory()->count(10)->create(); 
    }
}
