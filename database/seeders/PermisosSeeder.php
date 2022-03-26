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
            'idModulo' => 1,
            'bool' => 0
        ]);
        Permiso::create([
            'Nombre' => 'Crear Artista',
            'idModulo' => 3,
            'bool' => 0
        ]);
        Permiso::create([
            'Nombre' => 'Crear Genero',
            'idModulo' => 4,
            'bool' => 0
        ]);
        Permiso::create([
            'Nombre' => 'Editar Genero',
            'idModulo' => 4,
            'bool' => 0
        ]);
        Permiso::create([
            'Nombre' => 'Eliminar Genero',
            'idModulo' => 4,
            'bool' => 0
        ]);

        Permiso::create([
            'Nombre' => 'Gestionar usuarios',
            'idModulo' => 2,
            'bool' => 0
        ]);

        Permiso::create([
            'Nombre' => 'Gestionar Roles',
            'idModulo' => 6,
            'bool' => 0
        ]);

        Permiso::create([
            'Nombre' => 'Gestionar Modulos',
            'idModulo' => 7,
            'bool' => 0
        ]);

        Permiso::create([
            'Nombre' => 'Gestionar Permisos',
            'idModulo' => 8,
            'bool' => 0
        ]);
    }
}
