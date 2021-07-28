<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConectaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conecta', function (Blueprint $table) {
            $table->unsignedInteger('id_perfil');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil');
            $table->unsignedInteger('id_dispositivo');
            $table->foreign('id_dispositivo')->references('id_dispositivo')->on('dispositivo');
            $table->primary(['id_perfil','id_dispositivo']);
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
        Schema::dropIfExists('conecta');
    }
}
