<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->numberBetween(1000000000, 9999999999),
            'nama' => fake()->name(),
            'kelas' => fake()->randomElement(['A', 'B', 'C']),
            'angkatan' => fake()->randomElement(['2019', '2020', '2021', '2022']),
            'dosen_id' => Dosen::all()->random()->id,
        ];
    }
}
