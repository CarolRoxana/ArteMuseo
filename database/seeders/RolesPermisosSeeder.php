<?php

namespace Database\Seeders;
use App\Models\RolPermiso;
use Illuminate\Database\Seeder;

class RolesPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolPermiso::create([
            'idRol' => 1,
            'idPermiso' => 1
        ]);
        RolPermiso::create([
            'idRol' => 1,
            'idPermiso' => 2
        ]);
        RolPermiso::create([
            'idRol' => 1,
            'idPermiso' => 3
        ]);
        RolPermiso::create([
            'idRol' => 1,
            'idPermiso' => 4
        ]);
        RolPermiso::create([
            'idRol' => 1,
            'idPermiso' => 5
        ]);
        RolPermiso::create([
            'idRol' => 1,
            'idPermiso' => 6
        ]);
        RolPermiso::create([
            'idRol' => 1,
            'idPermiso' => 7
        ]);
        RolPermiso::create([
            'idRol' => 1,
            'idPermiso' => 8
        ]);
        RolPermiso::create([
            'idRol' => 1,
            'idPermiso' => 9
        ]);
        RolPermiso::create([
            'idRol' => 2,
            'idPermiso' => 2
        ]);
        
    }
}
