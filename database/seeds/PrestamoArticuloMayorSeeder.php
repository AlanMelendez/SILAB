<?php

use App\prestamo_articulo_mayor;
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
        
        factory(prestamo_articulo_mayor::class,50)->create();
    }
}