<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Pemrograman Dasar',
                'Algoritma & Struktur Data',
                'Basis Data',
                'Pemrograman Web',
                'Jaringan Komputer',
                'Sistem Operasi',
                'Pemrograman Berorientasi Objek',
                'Rekayasa Perangkat Lunak',
                'Keamanan Informasi',
                'Analisis & Perancangan Sistem',
            ]),
            'description' => $this->faker->sentence(),
        ];
    }
}
