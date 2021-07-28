<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombre_usuario',50)->unique();
            $table->string('correo',70)->unique();
            $table->string('contrasena',70);
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->date('fecha_nac');
            $table->enum('sexo',['M','F','N/A']);
            $table->unsignedInteger('id_ciudad');
            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
