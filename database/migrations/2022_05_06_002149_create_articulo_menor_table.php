<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloMenorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_menor', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('nombre',50);
            $table->string('descripcion',100);
            $table->boolean('status');
            $table->bigInteger('stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo_menor');
    }
}
