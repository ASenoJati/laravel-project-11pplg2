<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jurusan = $this->faker->randomElement(['PPLG', 'ANIMASI-3D', 'DKV-DG', 'DKV-TG', 'ANIMASI-2D']);
        $grade = $this->faker->numberBetween(10, 12);
        $section = $this->faker->numberBetween(1, 5);

        return [
            'name' => "{$grade} {$jurusan} {$section}",
        ];
    }
}
