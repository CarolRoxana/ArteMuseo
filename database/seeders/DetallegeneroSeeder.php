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
            'nombre' => 'Corporal',
            'idGenero' => '1'
        ]);

        DetalleGenero::create([
            'nombre' => 'Figura',
            'idGenero' => '2'
        ]);

        DetalleGenero::create([
            'nombre' => 'Abstracta',
            'idGenero' => '3'
        ]);

        DetalleGenero::create([
            'nombre' => 'Pesado',
            'idGenero' => '4'
        ]);

        DetalleGenero::create([
            'nombre' => 'arquitectura',
            'idGenero' => '4'
        ]);
    }
}
