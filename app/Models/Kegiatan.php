<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    /**
     * Tentukan kolom mana yang boleh diisi secara massal.
     */
    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'image',
    ];

    /**
     * Tentukan kolom mana yang harus diubah ke tipe data Date/DateTime.
     */
    protected $casts = [
        'date' => 'date',
    ];
}
