<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $user_loged = auth()->user(); //{"id":1,"name":"Alan","email":"test@test.com","email_verified_at":null,"created_at":null,"updated_at":null}
        $id_user_loged = $user_loged->id; //Obtenemos el id.
        $prestamos = DB::table('prestamos')
            ->join('alumnos', 'alumnos.id', '=', 'prestamos.id_alumno')
            ->join('users', 'users.id', '=', 'alumnos.id_usuario')
            ->join('laboratorios', 'laboratorios.id', '=', 'prestamos.id_laboratorio')
            ->select('prestamos.id', 'prestamos.fecha', 'prestamos.status', 'laboratorios.nombre_laboratorio', 'users.name', 'alumnos.semestre', 'alumnos.carrera', 'alumnos.numero_control')
            ->where([['users.id', '=', $id_user_loged],['prestamos.status', '=' , 0]]) //Array con varias clausulas where
            ->orderBy('prestamos.fecha','DESC')
            ->paginate(7);
        return view('Components.prestamos-terminados',compact('prestamos'));
    }
    public function tramitesTerminados(){
        return view('Components.tramites-terminados');
    }

}