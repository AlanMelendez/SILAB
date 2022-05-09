<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloMayorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_mayor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50);
            $table->string('descripcion',100);
            $table->boolean('status');
            $table->bigInteger('numero_serie');
            $table->bigInteger('cantidad');


            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo_mayor');
    }
}
