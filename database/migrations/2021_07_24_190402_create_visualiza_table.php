<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualiza', function (Blueprint $table) {
            $table->unsignedInteger('id_perfil');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil');
            $table->unsignedInteger('id_contenido');
            $table->foreign('id_contenido')->references('id_contenido')->on('contenido');
            $table->enum('calificacion',[1,2,3,4,5]);
            $table->primary(['id_perfil','id_contenido']);
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
        Schema::dropIfExists('visualiza');
    }
}
