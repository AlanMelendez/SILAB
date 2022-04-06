<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiberacionesController extends Controller
{
    //
    public function Mostrar_liberados(){
        return view ('liberacion/Liberaciones');

    }


}
