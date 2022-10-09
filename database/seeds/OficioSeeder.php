<?php

use Illuminate\Database\Seeder;
use App\oficio;
class OficioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(oficio::class,100)->create();
    }
}
