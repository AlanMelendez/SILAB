<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\prestamo_articulo_mayor;
use App\articulo_mayor;
use App\prestamo;

use Faker\Generator as Faker;

$factory->define(prestamo_articulo_mayor::class, function (Faker $faker) {
    return [
            //campos de la tabla de prestamo_articulo_menores
            'id_articulo_mayor'=> articulo_mayor::all()->unique()->random()->id ,
            'id_prestamo'=> prestamo::all()->unique()->random()->id ,
            
        ];
    });