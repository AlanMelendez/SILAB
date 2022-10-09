<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\tramite;
use Faker\Generator as Faker;

$factory->define(tramite::class, function (Faker $faker) {
    return [
        
        'fecha'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'status' => $faker->randomElement(['activo', 'inactivo']),
        'id_oficio'=> oficio::all()->unique()->random()->id,
        'id_alumno'=> alumno::all()->unique()->random()->id
        

    ];
});
