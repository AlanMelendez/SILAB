<?php

use Illuminate\Database\Seeder;
use App\articulo_menor_laboratorio;

class articulo_menor_laboratorios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $articulo = articulo_menor_laboratorio::create(
            [
                'id_articulo_menor' => 1,
                'id_laboratorio' => 1
            ]
        );
    }
}
