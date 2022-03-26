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
    }
}
