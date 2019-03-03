<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaAliados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliados', function (Blueprint $table) {
            $table->increments('idAliado');         //Primary Key
            $table->string('nombreAliado');
            $table->string('telefonoAliado', 20);
            $table->string('direccionAliado');
            $table->unsignedInteger('idUsuario');
            //$table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aliados');
    }
}
