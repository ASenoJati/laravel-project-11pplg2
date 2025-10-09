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

        $name = $this->faker->unique()->randomElement(['WEB DEVELOPMENT', 'GAME DEVELOPMENT', 'MOBILE DEVELOPMENT', 'DESKTOP DEVELOPMENT', 'AI ENGINEERING']);

        return [
            'name' => $name,
            'description' => $this->faker->sentence(),
        ];
    }
}
