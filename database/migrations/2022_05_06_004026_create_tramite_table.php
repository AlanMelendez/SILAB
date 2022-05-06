<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramite', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->date('fecha');
            $table->boolean('status');
            //$table->timestamps();
        });
        Schema::table('tramite', function (Blueprint $table) {
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_oficio');

            $table->foreign('id_alumno')->references('id')->on('alumno');
            $table->foreign('id_oficio')->references('id')->on('oficio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramite');
    }
}
