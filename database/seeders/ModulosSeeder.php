<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modulo;


class ModulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modulo::create([
            'Nombre' => 'Obras'
        ]);

        Modulo::create([
            'Nombre' => 'Usuarios'
        ]);

        Modulo::create([
            'Nombre' => 'Artistas'
        ]);

        Modulo::create([
            'Nombre' => 'Generos'
        ]);
        Modulo::create([
            'Nombre' => 'Compras'
        ]);
    }
}
