<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Estado');
            $table->integer('Precio');
            $table->timestamp('FechaCreacion');
            $table->string('Porcentaje');
            $table->string('img');
            $table->integer('idGenero')->unsigned();
            $table->foreign('idGenero')->references('id')->on('genero');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('idArtista')->unsigned();
            $table->foreign('idArtista')->references('id')->on('artista');
            $table->integer('bool');
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
        Schema::dropIfExists('obra');
    }
}
