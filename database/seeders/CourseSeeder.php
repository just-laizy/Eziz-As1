<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            'Computer-1',
            'Computer-2',
            'Computer-3',
            'Computer-4',
            'Computer-5',
            'Computer-6',
            'Computer-7',
            'Computer-8',
            'Computer-9',
            'Computer-10',
        ];

        foreach ($courses as $course) {
            $obj = new Course();
            $obj->name = $course;
            $obj->save();
        }
    }
}
