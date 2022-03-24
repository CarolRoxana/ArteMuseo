<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artista;
use Carbon\Carbon;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artista::create([
            'Name'      =>  'Craig',
            'LastaName'  =>   'Cellini',
            'Email'  =>   '',
            'FechaNacimiento' => Carbon::parse('1500-11-03'),
            'Nacionalidad' => 'Italiano',
            'Biografia' => 'Bio',
            'img' => '/',
            'Porcentaje' => 9,
            'bool' => 0
        ]);
    }
}
