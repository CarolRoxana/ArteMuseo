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
            'Nombre' => 'Administrador'
        ]);
        Rol::create([
            'Nombre' => 'Artista'
        ]);
        Rol::create([
            'Nombre' => 'Comprador'
        ]);
    }
}
