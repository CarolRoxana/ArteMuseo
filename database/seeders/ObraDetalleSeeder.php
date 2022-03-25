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
            'descripcion' => 'Bonita y funcional',
            'idDetalleGenero' => 2,
            'idObra' => 1
        ]);
    }
}
