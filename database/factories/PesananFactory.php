<?php

namespace Database\Factories;

use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pesanan>
 */
class PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pelanggan' => fake()->unique->randomElement([
                'Rudi',
                'Dewi',
            ]),
            'tanggal_masuk' => fake()->randomElement([
                '2026-10-01',
                '2026-10-08',
            ]),
            'jumlah' => fake()->randomElement([
                '3 kg',
                '2 potong'
            ]);
            'total_biaya' => 
        ];
    }
}
