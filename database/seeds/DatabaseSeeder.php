<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //Crearemos los usuarios, cada seeder(alumno y personal) lee los registros creados por el seeder usuario y asi crea la relacion.
       $this->call(UsuarioSeeder::class); //Creamos 20 usuarios
        $this->call(AlumnoSeeder::class); //10 para alumno
        $this->call(PersonalSeeder::class); //10 Para personal


    }
}
