<?php

namespace Database\Seeders;

use App\Models\Respuestas;
use Illuminate\Database\Seeder;

class RespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Respuestas::create([
            'Nombre_Respuesta' => 'Pool',
            'idUsuario' => 1,
            'idPreguntas' => 1
        ]);
    }
}
