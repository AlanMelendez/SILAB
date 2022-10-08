<?php

use App\prestamo_articulo_menor;
use Illuminate\Database\Seeder;

class PrestamoArticuloMenorseeder extends Seeder
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