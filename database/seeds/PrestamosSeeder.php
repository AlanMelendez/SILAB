<?php

use Illuminate\Database\Seeder;
use App\prestamo;

class PrestamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creamos 100
        factory(prestamo::class, 100)->create();
    }
}
