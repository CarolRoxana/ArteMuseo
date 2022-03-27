<?php

namespace Database\Seeders;

use App\Models\ObraDetalle;
use Illuminate\Database\Seeder;

class ObraDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ObraDetalle::create([
            'descripcion' => 'Expresiva',
            'idDetalleGenero' => 1,
            'idObra' => 1
        ]);
    }
}
