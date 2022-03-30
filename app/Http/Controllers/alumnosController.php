<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnosController extends Controller
{
    public function show(){
        return view('Alumnos/tramite');
    }
    
    public function consultaA(){
        return view('Alumnos/adeudos');
    }
}
