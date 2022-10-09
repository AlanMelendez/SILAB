<?php

use Illuminate\Database\Seeder;

class OficioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\oficios::class,100)->create();


    }
}
