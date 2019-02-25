<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsuario');        //Primary Key
            $table->string('nombreUsuario');
            $table->string('emailUsuario')->unique();
            $table->string('telefonoUsuario')->nullable();
            $table->string('password');
            $table->boolean('rolAdministrador');
            $table->boolean('rolCliente');
            $table->boolean('rolPublicista');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
