<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula', function (Blueprint $table) {
            $table->increments('id_pelicula');
            $table->smallInteger('mins_duracion');
            $table->string('sinopsis',500);
            $table->unsignedInteger('id_contenido');
            $table->foreign('id_contenido')->references('id_contenido')->on('contenido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula');
    }
}
