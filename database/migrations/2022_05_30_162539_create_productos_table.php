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
            $table->engine = 'InnoDB';
            $table->id('id_productos');
            $table->string('nombre_producto');
            $table->string('descripcion_producto');
            $table->float('precio_producto');
            $table->integer('numero_producto');
            $table->string('binario_producto');
            $table->enum('estado',['activo', 'inactivo']);
            $table->integer('id_categoria')->unsigned()->index();
            $table->integer('id_tipo_moneda')->unsigned()->index();
            $table->integer('id_rubro')->unsigned()->index();
            $table->integer("id_empresa")->unsigned()->index();
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
