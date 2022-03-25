<?php

namespace Database\Seeders;

use App\Models\Envio;
use Illuminate\Database\Seeder;

class EnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Envio::create([
            'Estado' => 'Anzoategui',
            'Direccion' => 'Barcelona - calle SanJuan Casa 8',
            'iduser' => 1,
            'idObra' => 1
        ]);
    }
}
