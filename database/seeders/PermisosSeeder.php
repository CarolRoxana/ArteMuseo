<?php

namespace Database\Seeders;
use App\Models\Permiso;
use Illuminate\Database\Seeder;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permiso::create([
            'Nombre' => 'Crear Obras',
            'idModulo' => 1
        ]);
        Permiso::create([
            'Nombre' => 'Crear Artista',
            'idModulo' => 3
        ]);
        Permiso::create([
            'Nombre' => 'Crear Genero',
            'idModulo' => 4
        ]);
        Permiso::create([
            'Nombre' => 'Editar Genero',
            'idModulo' => 4
        ]);
        Permiso::create([
            'Nombre' => 'Eliminar Genero',
            'idModulo' => 4
        ]);

        Permiso::create([
            'Nombre' => 'Gestionar usuarios',
            'idModulo' => 2
        ]);
    }
}
