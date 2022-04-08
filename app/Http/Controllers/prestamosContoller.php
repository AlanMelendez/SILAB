<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prestamosContoller extends Controller
{
    //
    public function todosPrestamos(){
        return view('Alumnos.prestamos');
    }
    public function consultaAdeudoAlumno(){
        return view('Alumnos/adeudos');
    }
}
