<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Student::factory(10)->create();
        Guardian::factory(10)->create();
        Classroom::factory(39)->hasStudents(5)->create();
    }
}
