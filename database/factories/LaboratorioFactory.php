<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\laboratorio;
use App\personal;
use Faker\Generator as Faker;

$factory->define(laboratorio::class, function (Faker $faker) {
    return [
        //
        'nombre_laboratorio'=> $faker -> name(),
        'id_personal'=> personal::all()->unique()->random()->id 
    ];
});
