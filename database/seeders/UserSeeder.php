<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>  'Admin',
            'email'     =>  'admin@admin.com',
            'password'  =>   Hash::make('Admin'),
            'Nickname'  =>   'Pollito',
            'idRol' => 1,
            'bool'      =>  0
        ]);
        User::create([
            'name'      =>  'Artista',
            'email'     =>  'artista@artista.com',
            'password'  =>   Hash::make('Artista'),
            'Nickname'  =>   'Artista',
            'idRol' => 2,
            'bool'      =>  0
        ]);
        User::create([
            'name'      =>  'Compra',
            'email'     =>  'compra@compra.com',
            'password'  =>   Hash::make('Compra'),
            'Nickname'  =>   'Comprador',
            'idRol' => 3,
            'bool'      =>  0
        ]);
    }
}
