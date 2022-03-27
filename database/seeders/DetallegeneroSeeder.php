<?php

namespace Database\Seeders;

use App\Models\DetalleGenero;
use Illuminate\Database\Seeder;

class DetallegeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetalleGenero::create([
            'nombre' => 'Digital',
            'idGenero' => '1'
        ]);
        DetalleGenero::create([
            'nombre' => 'Tipo',
            'idGenero' => '1'
        ]);
    }
}
