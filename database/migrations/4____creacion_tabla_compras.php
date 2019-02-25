<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->unsignedInteger('idUsuario');
            $table->unsignedInteger('idCupon');
            $table->dateTime('fechaCompra');
            $table->integer('cantidad');
            //$table->timestamps();

            $table->primary(['fechaCompra','idUsuario','idCupon']);
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');
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
        Schema::dropIfExists('compras');
    }
}
