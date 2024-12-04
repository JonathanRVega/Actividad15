<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peliculas')->insert([
            [
                'Nombre' => 'Stars Wars',
                'Clasificacion' => 'A',
                'Fecha' => '2024-01-01',
                'Revision' => 'Buena',
                'Temporada' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nombre' => 'Harry Potter',
                'Clasificacion' => 'B',
                'Fecha' => '2023-05-15',
                'Revision' => 'Excelente',
                'Temporada' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
