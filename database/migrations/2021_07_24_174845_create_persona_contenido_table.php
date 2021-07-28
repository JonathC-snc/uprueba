<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaContenidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_contenido', function (Blueprint $table) {
            $table->increments('idpersona_cont');
            $table->string('nombre_trab',50);
            $table->string('apellido_trab',50);
            $table->date('fecha_ingreso');
            $table->enum('sexo_trab',['M','F','N/A']);
            $table->boolean('es_actor');
            $table->boolean('es_director');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_contenido');
    }
}
