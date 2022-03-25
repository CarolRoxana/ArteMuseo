<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistagenero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistagenero', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idGenero')->unsigned();
            $table->foreign('idGenero')->references('id')->on('genero');
            $table->integer('idArtista')->unsigned();
            $table->foreign('idArtista')->references('id')->on('artista');
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
        Schema::dropIfExists('artistagenero');
    }
}
