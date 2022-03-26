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
            'Nombre' => 'Obras',
            'bool' => 0
        ]);

        Modulo::create([
            'Nombre' => 'Usuarios',
            'bool' => 0
        ]);

        Modulo::create([
            'Nombre' => 'Artistas',
            'bool' => 0
        ]);

        Modulo::create([
            'Nombre' => 'Generos',
            'bool' => 0
        ]);
        Modulo::create([
            'Nombre' => 'Compras',
            'bool' => 0
        ]);
        Modulo::create([
            'Nombre' => 'Roles',
            'bool' => 0
        ]);
        Modulo::create([
            'Nombre' => 'Modulos',
            'bool' => 0
        ]);
        Modulo::create([
            'Nombre' => 'Permisos',
            'bool' => 0
        ]);
    }
}
