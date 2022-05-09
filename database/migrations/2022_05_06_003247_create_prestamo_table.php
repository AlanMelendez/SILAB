<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->boolean('status');
            //$table->timestamps();
        });
        Schema::table('prestamo', function (Blueprint $table) {
            $table->unsignedBigInteger('id_laboratorio');
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_prestamo_articulo');

            $table->foreign('id_laboratorio')->references('id')->on('laboratorio');
            $table->foreign('id_alumno')->references('id')->on('alumno');
            $table->foreign('id_prestamo_articulo')->references('id')->on('prestamo_articulo');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamo');
    }
}
