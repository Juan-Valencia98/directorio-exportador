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
            $table->id('id_producto');
            $table->string('titulo_empresa');
            $table->string('rubro_producto');
            $table->string('numero_producto');
            $table->string('categoria_producto');
            $table->string('nombre_producto');
            $table->string('binario_producto');
            $table->string('unidad_medida_producto');
            $table->text('descripcion_producto');
            $table->float('precio_producto');
            $table->string('moneda_producto');
            $table->string('cod_estado')->default('ACT');
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
        Schema::dropIfExists('productos');
    }
}
