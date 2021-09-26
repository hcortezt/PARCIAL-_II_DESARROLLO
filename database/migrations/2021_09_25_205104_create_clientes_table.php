<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //CREAMOS LOS CAMPOS DE LA TABLA PARA MIGRAR
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();//EL ID DEL CLIENTE ES AUTOINCREMENTABLE
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('DPI');
            $table->string('Foto');
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
        Schema::dropIfExists('clientes');
    }
}
