<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArtistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artista', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('LastaName');
            $table->string('Email');
            $table->date('FechaNacimiento');
            $table->string('Nacionalidad');
            $table->string('Biografia');
            $table->string('img');
            $table->string('Porcentaje');
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
        Schema::dropIfExists('artista');
    }
}
