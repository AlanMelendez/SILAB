<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use app\alumno;
use app\laboratorio;
use App\prestamo;
use Faker\Generator as Faker;

$factory->define(Prestamo::class, function (Faker $faker) {
    return [
        //Aqui se llenaran los campos de la tabla de prestamos
        'fecha'=> $faker->date(),
        'status'=> $faker->boolean(),
        'id_alumno'=> alumno::all()->unique()->random()->id,
        'id_laboratorio'=> laboratorio::all()->unique()->random()->id
    ];
});
