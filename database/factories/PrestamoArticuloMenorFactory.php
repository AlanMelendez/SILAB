<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\prestamo_articulo_menor;
use App\articulo_menor_laboratorio;
use App\prestamo;

use Faker\Generator as Faker;

$factory->define(prestamo_articulo_menor::class, function (Faker $faker) {
    return [
            //campos de la tabla de prestamo_articulo_menores
            // 'id_articulo_menor'=> articulo_menor::all()->unique()->random()->id ,
            'id_articulo_menor'=> articulo_menor_laboratorio::all()->unique()->random()->id ,

            'id_prestamo'=> prestamo::all()->unique()->random()->id ,

        ];
    });



