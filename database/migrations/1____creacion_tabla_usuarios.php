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
            $table->increments('id');        //Primary Key
            $table->string('nombreUsuario');
            $table->string('email')->unique();
            $table->string('telefonoUsuario')->nullable();
            $table->string('password');
            $table->boolean('rolAdministrador')->default('0');
            $table->boolean('rolCliente')->default('1');
            $table->boolean('rolPublicista')->default('0');


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
