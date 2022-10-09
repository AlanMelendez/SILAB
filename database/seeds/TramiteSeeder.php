<?php

use Illuminate\Database\Seeder;
use App\tramite;

class TramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(tramite::class,100)->create();

    }
}
