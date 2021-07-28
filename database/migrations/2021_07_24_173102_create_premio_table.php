<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premio', function (Blueprint $table) {
            $table->increments('id_premio');
            $table->string('nombre_premio',50);
            $table->year('ano_fue_ganadora');
            $table->unsignedInteger('id_pelicula');
            $table->foreign('id_pelicula')->references('id_pelicula')->on('pelicula');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premio');
    }
}
