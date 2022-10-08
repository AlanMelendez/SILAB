<?php

use Illuminate\Database\Seeder;
use App\prestamo_articulo_mayor;

class prestamoArticuloMayores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(prestamo_articulo_mayor::class,50)->create();

    }
}
