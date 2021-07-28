<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodio', function (Blueprint $table) {
            $table->increments('id_episodio');
            $table->string('nombre',70);
            $table->unsignedInteger('numero');
            $table->string('descripcion',500);
            $table->unsignedInteger('id_temporada');
            $table->foreign('id_temporada')->references('id_temporada')->on('temporada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodio');
    }
}
