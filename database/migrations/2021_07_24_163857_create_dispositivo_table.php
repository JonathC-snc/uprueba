<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispositivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivo', function (Blueprint $table) {
            $table->increments('id_dispositivo');
            $table->string('nombre_dispositivo',50);
            $table->unsignedInteger('id_tipo');
            $table->foreign('id_tipo')->references('id_tipo')->on('tipo_dispositivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispositivo');
    }
}
