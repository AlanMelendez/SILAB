<?php
use App\articulo_mayor;
use Illuminate\Database\Seeder;

class ArticuloMayorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(articulo_mayor::class, 350)->create();
    }
}
