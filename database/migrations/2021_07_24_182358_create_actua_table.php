<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actua', function (Blueprint $table) {
            $table->unsignedInteger('id_contenido');
            $table->foreign('id_contenido')->references('id_contenido')->on('contenido');
            $table->unsignedInteger('idpersona_cont');
            $table->foreign('idpersona_cont')->references('idpersona_cont')->on('persona_contenido');
            $table->boolean('es_protagonista');
            $table->primary(['id_contenido','idpersona_cont']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actua');
    }
}
