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
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('producto_id');
            $table->integer('categoria_id');
            $table->string('producto_nombre');
            $table->string('producto_descripcion');
            $table->integer('producto_stock');
            $table->integer('producto_valor');
            $table->integer('producto_alto');
            $table->integer('producto_ancho');
            $table->integer('producto_profundidad');
            $table->integer('producto_peso');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
