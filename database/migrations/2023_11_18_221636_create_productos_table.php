<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('producto_id');
            $table->string('producto_codigo', 20);
            $table->string('producto_nombre', 50);
            $table->string('producto_categoria', 50);
            $table->integer('producto_cantidad');
            $table->integer('producto_precio');
            $table->string('descripcion', 100);
            $table->unsignedBigInteger('sucursal_id');
            $table->timestamps();
            //relacion
            $table->foreign('sucursal_id')->references('sucursal_id')->on('sucursales');
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
}
