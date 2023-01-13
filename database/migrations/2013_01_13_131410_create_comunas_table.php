<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunas', function (Blueprint $table) {
            $table->increments('id_comuna');
            $table->string('comuna_nom')->default("No requiere");
            $table->unsignedInteger('provincia_id');
            $table->foreign('provincia_id')->references('provincia_id')->on('provincias');
            $table->string('comuna_abreviatura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunas');
    }
};
