<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\articulo_mayor;
use Faker\Generator as Faker;

$factory->define(articulo_mayor::class, function (Faker $faker) {
    return [
        //
        'nombre'=> $faker -> word(),
        'descripcion_articulo'=> $faker -> name(),
        'status'=> $faker -> boolean(),
        'numero_serie' => $faker -> ean13(),
        'clave_producto' => $faker -> lexify('AGJY ???'),
        'tipo' => $faker -> word()
    ];
});

