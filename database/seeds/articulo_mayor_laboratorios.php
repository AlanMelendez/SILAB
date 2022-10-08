<?php

use Illuminate\Database\Seeder;
use App\articulo_mayor_laboratorio;

class articulo_mayor_laboratorios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $articulo = articulo_mayor_laboratorio::create(
            [
                'id_articulo_mayor' => 1,
                'id_laboratorio' => 1
            ]
        );
    }
}
