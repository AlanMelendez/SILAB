<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\oficio;
use Faker\Generator as Faker;

$factory->define(oficio::class, function (Faker $faker) {
    return [
        
        'nombre'=> $faker->name(),
        //'folio_oficio' $faker->randomNumber($nbDigits = NULL, $strict = false)
        'folio_oficio'=> $faker->name()

    ];
});
