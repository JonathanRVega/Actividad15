<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personajes')->insert([
            [
                'Nombre' => 'Luke Skywalker',
                'pelicula_nombre' => 'Stars Wars',
                'Imagen' => '',
                'Descripcion' => 'Protagonista de star wars',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nombre' => 'Harry',
                'pelicula_nombre' => 'Harry Potter',
                'Imagen' => '',
                'Descripcion' => 'Protagonista de Harry Potter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
