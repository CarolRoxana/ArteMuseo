<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistaobra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistaobra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idObra')->unsigned();
            $table->foreign('idObra')->references('id')->on('obra');
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
        Schema::dropIfExists('artistaobra');
    }
}
