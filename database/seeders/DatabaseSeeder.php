<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CourseSeeder::class,
            SeasonSeeder::class,
            ClassroomSeeder::class,
        ]);
        \App\Models\Student::factory(1000)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Teacher::factory(20)->create();
        \App\Models\Lesson::factory(100)->create();
        \App\Models\Registration::factory(2000)->create();
    }
}
