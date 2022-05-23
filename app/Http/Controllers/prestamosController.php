<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prestamosController extends Controller
{
    ////
    public function todosPrestamos(){
        return view('Alumnos.prestamos');
    }
    public function consultaAdeudoAlumno(){
        return view('Alumnos/adeudos');
    }
    // public function showRegistros(){
    //     return view('Alumnos.registros');
    // }
    public function agregarPrestamo(){
        return view ('Components.nuevo-prestamo-individual');
    }
    public function prestamosTerminados(){
        return view('Components.prestamos-terminados');
    }
    public function tramitesTerminados(){
        return view('Components.tramites-terminados');
    }

}