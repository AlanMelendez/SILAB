<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiberacionesController extends Controller
{
    //
    public function mostrar_pendientes(){
        return view ('Liberacion/comprobante');

    }
    public function mostrar_liberados(){
        return view ('Liberacion/liberados');

    }


}


