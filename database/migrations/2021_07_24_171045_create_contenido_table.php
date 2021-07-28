<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido', function (Blueprint $table) {
            $table->increments('id_contenido');
            $table->string('nombre',50);
            $table->year('ano_lanzamiento');
            $table->boolean('es_contenido_original');
            $table->unsignedInteger('id_idioma');
            $table->foreign('id_idioma')->references('id_idioma')->on('idioma');
            $table->unsignedInteger('id_edad');
            $table->foreign('id_edad')->references('id_edad')->on('clasificacion_edad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenido');
    }
}
