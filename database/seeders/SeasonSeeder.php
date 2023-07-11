<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    public function run(): void
    {
        $seasons = [
            'Summer',
            'Winter',
        ];

        foreach ($seasons as $season) {
            $obj = new Season();
            $obj->name = $season;
            $obj->save();
        };
    }
}
