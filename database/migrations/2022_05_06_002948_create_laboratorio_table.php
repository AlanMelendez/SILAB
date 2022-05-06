<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorio', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('nombre',50);
            //$table->timestamps();
        });
        Schema::table('laboratorio', function (Blueprint $table) {
            $table->unsignedBigInteger('id_personal');
            $table->unsignedBigInteger('id_articulo_mayor');
            $table->unsignedBigInteger('id_articulo_menor');

            $table->foreign('id_personal')->references('id')->on('personal');
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
        Schema::dropIfExists('laboratorio');
    }
}
