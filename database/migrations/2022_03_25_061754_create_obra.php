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
            $table->id();
            $table->string('Name');
            $table->string('Estado');
            $table->integer('Precio');
            $table->timestamp('FechaCreacion');
            $table->string('Porcentaje');
            $table->string('img');
            $table->integer('idGenero');
            $table->integer('idUser');
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
