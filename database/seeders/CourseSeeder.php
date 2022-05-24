<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                "name" => "Matematicas",
                "version" => "2.0"
            ]
        ];

        foreach ($courses as $course){
            Course::create(
                [
                    'name' => $course['name'],
                    'version' => $course['version']
                ]
            );
        }
    }
}
