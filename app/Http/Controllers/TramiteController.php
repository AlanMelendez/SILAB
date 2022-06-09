<?php

namespace App\Http\Controllers;

use App\alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        session_start();

        // ---------------------------- Saber que usuario/alumno esta logeado ----------------------------------------------
        //Obtenemos las credenciales del ususario loggeado, De esta manera mostramos los articulos dependiendo del laboratorio que tenga asignado.
        $user_loged = auth()->user(); //{"id":1,"name":"Alan","email":"test@test.com","email_verified_at":null,"created_at":null,"updated_at":null}
        $id_user_loged = $user_loged->id; //Obtenemos el id.

        $prestamos= DB::table('prestamos')
            ->join('alumnos', 'alumnos.id', '=', 'prestamos.id_alumno') 
            ->join('users', 'users.id', '=', 'alumnos.id_usuario') 
            ->join('laboratorios','laboratorios.id','=','prestamos.id_laboratorio')
            ->select('prestamos.id','prestamos.fecha','prestamos.status','laboratorios.nombre_laboratorio','users.name','alumnos.semestre','alumnos.carrera','alumnos.numero_control') 
            ->where([['users.id','=',$id_user_loged],['prestamos.status','=', 1]]) //Array con varias clausulas where
            ->get();
        return view('Alumnos/adeudos-vista-alumnos',compact('prestamos')); //[{"id":1,"fecha":"2022-06-08","status":1,"name":"Alan","semestre":6,"carrera":"Informatica","numero_control":192310781}]
        //return($prestamos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $alumno= alumno::all();

        return view('Alumnos/tramite' ,array('alumno'=> $alumno));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
