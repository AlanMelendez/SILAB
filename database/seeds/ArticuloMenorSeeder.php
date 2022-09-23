<?php

use App\articulo_menor;
use Illuminate\Database\Seeder;

class ArticuloMenorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(articulo_menor::class, 350)->create();
    }
}
