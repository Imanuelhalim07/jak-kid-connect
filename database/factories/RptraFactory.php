<?php

namespace Database\Factories;

use App\Models\Rptra;
use Illuminate\Database\Eloquent\Factories\Factory;

class RptraFactory extends Factory
{
    protected $model = Rptra::class;

    public function definition(): array
    {
        $regions = ['Jakarta Pusat', 'Jakarta Utara', 'Jakarta Barat', 'Jakarta Selatan', 'Jakarta Timur', 'Kepulauan Seribu'];

        return [
            'name' => $this->faker->words(3, true) . ' RPTRA',
            'address' => $this->faker->address,
            'city_region' => $this->faker->randomElement($regions),
            'fasilitas' => $this->faker->sentences(2, true),
            'jam' => $this->faker->randomElement(['08.00 - 18.00', 'Buka 24 Jam', '09.00 - 21.00']),
            'kontak' => $this->faker->phoneNumber,
            'image' => 'assets/images/placeholder.png', // Gunakan gambar placeholder
        ];
    }
}
