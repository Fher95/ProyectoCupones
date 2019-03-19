<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaRedimidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redimidos', function (Blueprint $table) {
            $table->unsignedInteger('idUsuario');
            $table->unsignedInteger('idCupon');
            $table->dateTime('fechaCompra');
            $table->dateTime('fechaRedimido');
            $table->string('codigoARedimir');
            //$table->timestamps();

            $table->primary(['codigoARedimir']);
            $table->foreign('idUsuario')->references('id')->on('usuarios');
            $table->foreign('idCupon')->references('idCupon')->on('cupones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('redimidos');
    }
}
