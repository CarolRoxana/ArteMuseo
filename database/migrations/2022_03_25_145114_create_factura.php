<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

class CreateFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->integer('Codigofactura');
            $table->timestamp('FechaCompra');
            $table->string('TipoCompra');
            $table->integer('Iva');
            $table->integer('IvaPorcentaje');
            $table->float('PrecioTotal');
            $table->string('EstadoVenta');
            $table->integer('idObra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
