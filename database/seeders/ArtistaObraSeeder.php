<?php

namespace Database\Seeders;

use App\Models\ArtistaObra;
use Illuminate\Database\Seeder;

class ArtistaObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArtistaObra::create([
            'idObra' => 1,
            'idArtista' => 1
        ]);
    }
}
