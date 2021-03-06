<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObradetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obradetalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('idDetalleGenero');
            $table->integer('idObra')->unsigned();
            $table->foreign('idObra')->references('id')->on('obra');
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
        Schema::dropIfExists('obradetalle');
    }
}
