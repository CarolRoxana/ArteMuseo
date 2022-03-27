<?php

namespace Database\Seeders;

use App\Models\Obra;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obra::create([
            'Name' => 'Rapture',
            'Estado' => 'Disponible',
            'Precio' => 152,
            'FechaCreacion' => Carbon::parse('2004-12-16'),
            'Porcentaje' => 5,
            'img' => 'images/1648329542.jpg',
            'idGenero' => 1,
            'idUser' => 1,
            'idArtista' => 1,
            'bool' => 0
        ]);

        Obra::create([
            'Name' => 'Los Amantes',
            'Estado' => 'Disponible',
            'Precio' => 500,
            'FechaCreacion' => Carbon::parse('1995-12-22'),
            'Porcentaje' => 6,
            'img' => 'images/losamantes.jpg',
            'idGenero' => 1,
            'idUser' => 2,
            'idArtista' => 1,
            'bool' => 0
        ]);

        Obra::create([
            'Name' => 'Los viajes de Domi',
            'Estado' => 'Disponible',
            'Precio' => 1500,
            'FechaCreacion' => Carbon::parse('1990-11-01'),
            'Porcentaje' => 6,
            'img' => 'images/Discobolo.jpg',
            'idGenero' => 2,
            'idUser' => 3,
            'idArtista' => 1,
            'bool' => 0
        ]);
    }
}
