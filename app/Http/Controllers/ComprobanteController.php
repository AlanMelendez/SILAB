<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprobanteController extends Controller
{
    //
    public function Mostrar_comprobante(){
        return view ('liberacion/comprobante');

    }
}
