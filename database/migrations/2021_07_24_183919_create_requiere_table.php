<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequiereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requiere', function (Blueprint $table) {
            $table->unsignedInteger('id_contenido');
            $table->foreign('id_contenido')->references('id_contenido')->on('contenido');
            $table->unsignedInteger('id_suscripcion');
            $table->foreign('id_suscripcion')->references('id_suscripcion')->on('suscripcion');
            $table->primary(['id_contenido','id_suscripcion']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requiere');
    }
}
