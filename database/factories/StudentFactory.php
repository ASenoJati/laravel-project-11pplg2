<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'birthday' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'classroom_id' => Classroom::inRandomOrder()->first()->id,
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
        ];
    }
}
