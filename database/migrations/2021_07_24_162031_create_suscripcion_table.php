<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripcion', function (Blueprint $table) {
            $table->increments('id_suscripcion');
            $table->string('nombre',50);
            $table->enum('tipo',['gold','premium','vip']);
            $table->string('descripcion',100);
            $table->double('tarifa',4,2);
            $table->unsignedInteger('id_plan');
            $table->foreign('id_plan')->references('id_plan')->on('plan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suscripcion');
    }
}
