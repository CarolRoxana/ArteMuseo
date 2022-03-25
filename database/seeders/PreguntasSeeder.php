<?php

namespace Database\Seeders;

use App\Models\Preguntas;
use Illuminate\Database\Seeder;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preguntas::create([
            'NombrePregunta' => 'Nombre Mascota',
            'bool' => 0
        ]);
    }
}
