<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('id_empresa');
            $table->string('logo_empresa');
            $table->string('titulo_empresa');
<<<<<<< HEAD
            $table->text('descripcion_empresa');
            $table->string('historia_empresa')->nullable();
            $table->text('mision_empresa');
            $table->text('vision_empresa');
            $table->string('whatsapp_empresa');
            $table->string('facebook_empresa');
            $table->enum('estado',['ACT','INA'])->default('ACT');
=======
            $table->string('descripcion_empresa');
            $table->string('historia_empresa');
            $table->string('mision_empresa');
            $table->string('vision_empresa');
            $table->string('whatsapp_empresa');
            $table->string('facebook_empresa');
            $table->enum('estado',['activo','inactivo']);
>>>>>>> 18e5c8cd67402b8c243097f585f2190f25ac3002
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
        Schema::dropIfExists('empresas');
    }
}
