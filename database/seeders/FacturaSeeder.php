<?php

namespace Database\Seeders;

use App\Models\Factura;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factura::create([
            'Codigofactura' => 321,
            'FechaCompra' => Carbon::parse('2021-05-05'),
            'TipoCompra' => 'Debito',
            'Iva' => 5,
            'IvaPorcentaje' => 223.75,
            'PrecioTotal' => 4698.75,
            'EstadoVenta' => 'Vendido',
            'idObra' => 5,
        ]);
    }
}
