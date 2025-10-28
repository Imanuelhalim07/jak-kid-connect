<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rptra extends Model
{
    use HasFactory;

    /**
     * Tentukan kolom mana yang boleh diisi secara massal (mass assignable).
     * Kolom-kolom ini sesuai dengan fields di migration 'rptras' Anda.
     */
    protected $fillable = [
        'name',
        'address',
        'city_region',
        'fasilitas',
        'jam',
        'kontak',
        'image',
    ];
}
