<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\SubjectGrade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubjectGrade>
 */
class SubjectGradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $student = Student::inRandomOrder()->first();
        return [
            'student_id' => $student->id,
            'name' => fake()->randomElement(['English', 'Math', 'Filipino', 'Science', 'PE']),
            'grade' => fake()->numberBetween(70,98),
        ];
    }
}
