<?php

namespace Database\Seeders;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'Nombre' => 'Administrador',
            'bool' => 0
        ]);
        Rol::create([
            'Nombre' => 'Artista',
            'bool' => 0
        ]);
        Rol::create([
            'Nombre' => 'Comprador',
            'bool' => 0
        ]);
        Rol::create([
            'Nombre' => 'Vendedor',
            'bool' => 0
        ]);
    }
}
