<?php

namespace Database\Seeders;

use App\Models\DetalleGenero;
use App\Models\Factura;
use App\Models\Genero;
use App\Models\Preguntas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ArtistaSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(DetallegeneroSeeder::class);
        $this->call(ObraSeeder::class);
        $this->call(ObraDetalleSeeder::class);
        $this->call(ArtistaGeneroSeeder::class);
        $this->call(ArtistaObraSeeder::class);
        $this->call(FacturaSeeder::class);
        $this->call(EnvioSeeder::class);
        $this->call(PreguntasSeeder::class);
        $this->call(RespuestasSeeder::class);
        $this->call(MembresiaSeeder::class);
        $this->call(ModulosSeeder::class);
        $this->call(PermisosSeeder::class);
        $this->call(RolesPermisosSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
