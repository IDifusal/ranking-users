<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CourseFactory extends Factory{
    public function definition(){
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'release_date' => now(),
    ];}
}