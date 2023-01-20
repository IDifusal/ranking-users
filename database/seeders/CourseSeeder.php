<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Course;
use App\Models\CourseRecords;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(100)->create();
        Course::factory()->count(100)->create();
        CourseRecords::factory()->count(100)->create();
    }
}
