<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KitSeeder extends Seeder
{
    public function run()
    {
        DB::table('roboticas')->insert([
            [
                'nombre_kit' => 'StarterKit',
            ],

            [
                'nombre_kit' => 'Educational Robotics Kit',
            ],

            [
                'nombre_kit' => 'Kit5',
            ],
        ]);
    }
}
