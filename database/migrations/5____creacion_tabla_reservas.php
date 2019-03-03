<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->unsignedInteger('idUsuario');
            $table->unsignedInteger('idCupon');
            $table->integer('cantidad');
            $table->dateTime('fechaReserva');
            //$table->timestamps();

            
            $table->primary(['fechaReserva','idCupon','idUsuario']);

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
        Schema::dropIfExists('reservas');
    }
}
