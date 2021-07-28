<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTieneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiene', function (Blueprint $table) {
            $table->unsignedInteger('id_contenido');
            $table->foreign('id_contenido')->references('id_contenido')->on('contenido');
            $table->unsignedInteger('id_genero');
            $table->foreign('id_genero')->references('id_genero')->on('genero');
            $table->primary(['id_contenido','id_genero']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiene');
    }
}
