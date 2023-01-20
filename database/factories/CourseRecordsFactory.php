<?php
namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class CourseRecordsFactory extends Factory{
    public function definition(){
        return [
            'user_id' => fake()->numberBetween(1, 100),
            'course_id' => fake()->numberBetween(1, 100),
            'attempts'=>fake()->numberBetween(1, 3),
            'grade'=>fake()->numberBetween(1, 20),
            'completed_at'=>fake()->dateTimeThisMonth(),
    ];}
}