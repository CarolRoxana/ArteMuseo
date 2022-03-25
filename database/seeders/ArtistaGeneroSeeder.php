<?php

namespace Database\Seeders;

use App\Models\ArtistaGenero;
use Illuminate\Database\Seeder;

class ArtistaGeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArtistaGenero::create([
            'idGenero' => 1,
            'idArtista' => 1
        ]);
    }
}
