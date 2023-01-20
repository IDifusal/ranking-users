<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\CourseSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CourseSeeder::class);

        // DB::table('course_records')->insert([
        //     'user_id' => 1,
        //     'course_id' =>1,
        //     'completed_at' =>now(),
        //     'grade'=>fake()->numberBetween(1, 20),
        //     'attempts'=>fake()->numberBetween(1, 3)
        // ]);
        // DB::table('course_records')->insert([
        //     'user_id' => 2,
        //     'course_id' =>fake()->numberBetween(1, 10),
        //     'completed_at' =>now(),
        //     'grade'=>fake()->numberBetween(1, 20),
        //     'attempts'=>fake()->numberBetween(1, 3)
        // ]);
        // DB::table('course_records')->insert([
        //     'user_id' => 3,
        //     'course_id' =>fake()->numberBetween(1, 10),
        //     'completed_at' =>now(),
        //     'grade'=>fake()->numberBetween(1, 20),
        //     'attempts'=>fake()->numberBetween(1, 3)
        // ]);
        // DB::table('course_records')->insert([
        //     'user_id' => 4,
        //     'course_id' =>fake()->numberBetween(1, 10),
        //     'completed_at' =>now(),
        //     'grade'=>fake()->numberBetween(1, 20),
        //     'attempts'=>fake()->numberBetween(1, 3)
        // ]);
        // DB::table('course_records')->insert([
        //     'user_id' => 5,
        //     'course_id' =>fake()->numberBetween(1, 10),
        //     'completed_at' =>now(),
        //     'grade'=>fake()->numberBetween(1, 20),
        //     'attempts'=>fake()->numberBetween(1, 3)
        // ]);
    }
}
