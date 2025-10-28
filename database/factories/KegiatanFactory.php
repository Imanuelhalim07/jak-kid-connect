<?php

namespace Database\Factories;

use App\Models\Kegiatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KegiatanFactory extends Factory
{
    protected $model = Kegiatan::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(3),
            'date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'location' => $this->faker->address,
            'image' => 'assets/images/kegiatan/placeholder.png',
        ];
    }
}