<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\tramite;
use App\oficio;
use App\alumno;
use Faker\Generator as Faker;

$factory->define(tramite::class, function (Faker $faker) {
    return [

        'fecha'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'status' => $faker->randomElement([0, 1]),
        'id_oficio'=> oficio::all()->unique()->random()->id,
        'id_alumno'=> alumno::all()->unique()->random()->id


    ];
});
