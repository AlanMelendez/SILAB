<?php

use Illuminate\Database\Seeder;
use App\prestamo_articulo_menor;

class prestamoArticuloMenores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(prestamo_articulo_menor::class,50)->create();
    }
}
