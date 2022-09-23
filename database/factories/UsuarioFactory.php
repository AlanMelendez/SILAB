<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;


// Para crear este factory y apuntar al modelo.
//php artisan make:factory UsuarioFactory --model=usuario

$factory->define(App\User::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->name(),
        // 'apellidos'=> 'test',
        'email'=>$faker->email(),
        'password'=>$faker->text(10),
        // 'id_rol'=> 1
    ];
});
