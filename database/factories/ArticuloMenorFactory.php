<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\articulo_menor;
use Faker\Generator as Faker;

$factory->define(articulo_menor::class, function (Faker $faker) {
    return [
        //campos tabla de articulo menor
        'nombre'=> $faker -> word(),
        'descripcion_articulo'=> $faker -> name(),
        'status'=> $faker -> boolean(),
        'stock' => $faker -> numberBetween(0,150),
        'clave_producto' => $faker -> lexify('AGJY ???'),
        'tipo' => $faker -> word()
    ];
});