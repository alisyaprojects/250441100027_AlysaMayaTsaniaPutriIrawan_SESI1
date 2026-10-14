<?php

namespace Database\Factories;

use App\Models\Layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Layanan>
 */
class LayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        'kode_layanan' => fake()->unique();
            'nama_layanan' => fake()->
       return [
            'kode ' => fake()->unique()->randomElement([
                'LK-001',
                'LK-002',
                'LS-001',
                'LS-002',
            ]),

            'jenis' => fake()->randomElement([
                'kiloan',
                'kiloan',
                'satuan',
                'satuan',
            ]),

            'tarif_per_satuan' => fake()->randomElement([
                'Rp6.000',
                'Rp8.000',
                'Rp35.0000',
                'Rp40.000',
            ]),
       ]

    }
}
