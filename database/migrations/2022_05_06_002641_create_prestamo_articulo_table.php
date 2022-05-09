<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo_articulo', function (Blueprint $table) {
            $table->bigIncrements('id');
           
        });
        Schema::table('prestamo_articulo', function (Blueprint $table) {
            $table->unsignedBigInteger('id_articulo_mayor');
            $table->unsignedBigInteger('id_articulo_menor');

         
            $table->foreign('id_articulo_mayor')->references('id')->on('articulo_mayor');
            $table->foreign('id_articulo_menor')->references('id')->on('articulo_menor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamo_articulo');
    }
}
