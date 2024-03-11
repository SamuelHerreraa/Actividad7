<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Admon',
                'email' => 'admon@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'tipo' => 'Administrativo',
            ],
            [
                'nombre' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'tipo' => 'Docente',
            ],
            [
                'nombre' => 'Estudiante',
                'email' => 'estudiante@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'tipo' => 'Estudiante',
            ],
        ]);
    }
}
