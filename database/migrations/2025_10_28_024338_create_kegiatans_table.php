<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id(); // Kunci utama otomatis (Auto-incrementing primary key)
            $table->string('title'); // Judul kegiatan
            $table->text('description'); // Deskripsi lengkap kegiatan
            $table->date('date'); // Tanggal pelaksanaan kegiatan
            $table->string('location')->nullable(); // Lokasi (opsional)
            $table->string('image')->nullable(); // Nama file gambar (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
