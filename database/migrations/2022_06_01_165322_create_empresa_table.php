<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id('id_empresa');
            $table->string('logo_empresa');
            $table->string('titulo_empresa');
            $table->string('descripcion_empresa');
            $table->string('historia_empresa');
            $table->string('mision_empresa');
            $table->string('vision_empresa');
            $table->string('whatsapp_empresa');
            $table->string('facebook_empresa');
            $table->enum('estado',['activo','inactivo']);
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
        Schema::dropIfExists('empresa');
    }
}
