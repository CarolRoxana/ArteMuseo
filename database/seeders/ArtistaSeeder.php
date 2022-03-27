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
            'Biografia' => 'Artista y filósofo',
            'img' => '/',
            'Porcentaje' => 9,
            'bool' => 0
        ]);

        Artista::create([
            'Name'      =>  'Eduardo',
            'LastaName'  =>   'Kobra',
            'Email'  =>   'ekobra@gmail.com',
            'FechaNacimiento' => Carbon::parse('1970-03-15'),
            'Nacionalidad' => 'Brasilero',
            'Biografia' => 'Artis callejero',
            'img' => '/',
            'Porcentaje' => 5,
            'bool' => 0
        ]);

        Artista::create([
            'Name'      =>  'Laurence',
            'LastaName'  =>   'Gartel',
            'Email'  =>   '',
            'FechaNacimiento' => Carbon::parse('1956-10-12'),
            'Nacionalidad' => 'Estadounidense',
            'Biografia' => 'Estudió arte de muy jóven',
            'img' => '/',
            'Porcentaje' => 5,
            'bool' => 0
        ]);

        Artista::create([
            'Name'      =>  'Bentacour',
            'LastaName'  =>   'Mohr',
            'Email'  =>   '',
            'FechaNacimiento' => Carbon::parse('1500-11-03'),
            'Nacionalidad' => 'Canadiense',
            'Biografia' => 'Pintor y músico de Jazz',
            'img' => '/',
            'Porcentaje' => 9,
            'bool' => 0
        ]);
    }
}
