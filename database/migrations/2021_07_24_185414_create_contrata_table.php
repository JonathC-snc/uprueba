<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContrataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrata', function (Blueprint $table) {
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            $table->unsignedInteger('id_suscripcion');
            $table->foreign('id_suscripcion')->references('id_suscripcion')->on('suscripcion');
            $table->unsignedInteger('id_tarjeta');
            $table->foreign('id_tarjeta')->references('id_tarjeta')->on('tarjeta_credito');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->primary(['id_usuario','id_suscripcion','id_tarjeta','fecha_inicio']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrata');
    }
}
