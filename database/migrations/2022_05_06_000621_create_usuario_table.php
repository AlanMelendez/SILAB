<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->string('correo',100)->unique();
            $table->string('password',50);
            //$table->timestamps();
        });
        Schema::table('usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_rol');
         
            $table->foreign('id_rol')->references('id')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
