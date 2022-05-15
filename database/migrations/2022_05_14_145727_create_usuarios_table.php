<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario','20');
            $table->string('password','100');
            $table->boolean('enable');
            //token para mantener session iniciada
            $table->rememberToken();
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_persona');
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_rol')->references('id')->on('roles')->cascadeOnDelete()->onUpdate('cascade');
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
        Schema::dropIfExists('usuarios');
    }
}
