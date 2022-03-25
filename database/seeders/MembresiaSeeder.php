<?php

namespace Database\Seeders;

use App\Models\Membresia;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MembresiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membresia::create([
            'Estado' => 'Comprado',
            'FechaPago' => Carbon::parse('2021-10-15'),
            'idUser' => 1
        ]);
    }
}
