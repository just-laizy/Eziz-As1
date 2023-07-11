<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    public function run(): void
    {
        $classrooms = [
            'D5',
            'D3',
            'A5',
            'B5',
            'A2',
            'A3',
            'B7',
            'B2',
            'A7',
            'B9',
        ];

        foreach ($classrooms as $classroom) {
            $obj = new Classroom();
            $obj->name = $classroom;
            $obj->save();
        };
    }
}
