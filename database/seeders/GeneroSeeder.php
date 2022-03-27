<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create([
            'NombreGenero' => 'Arte',
            'bool' => 0
        ]);

        Genero::create([
            'NombreGenero' => 'Escultura',
            'bool' => 0
        ]);

        Genero::create([
            'NombreGenero' => 'Pintura',
            'bool' => 0
        ]);

        Genero::create([
            'NombreGenero' => 'Barro',
            'bool' => 0
        ]);
    }
}
