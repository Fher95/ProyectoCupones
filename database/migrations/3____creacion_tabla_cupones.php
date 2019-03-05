<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaCupones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupones', function (Blueprint $table) {
            $table->increments('idCupon');
            $table->string('nombreCupon');
            $table->string('URLImagenCupon');
            $table->string('categoriaCupon');
            $table->float('precioCupon',11, 2);
            $table->float('descuentoCupon',3,1);
            $table->integer('totalAutorizados');
            $table->unsignedInteger('idUsuario');
            $table->unsignedInteger('idAliado');
            //$table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('usuarios');
            $table->foreign('idAliado')->references('idAliado')->on('aliados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cupones');
    }
}
