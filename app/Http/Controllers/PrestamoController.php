<?php

namespace App\Http\Controllers;

use App\articulo_mayor;
use App\articulo_menor;
use App\User;
use App\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Alumnos.registros');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // 192310781
        $numeroControl= trim($request->get('search_control')); //Obtenemos el numero control del input.
        $usuarios= DB::table('alumnos')
            ->join('users','users.id' , '=', 'alumnos.id') //users es la tabla, no el modelo
            ->select('alumnos.semestre', 'alumnos.carrera', 'alumnos.numero_control', 'users.name')
            ->where('alumnos.numero_control','LIKE','%'.$numeroControl.'%' )
            ->get();
       
        $articulosme = articulo_menor::all();
        $articulosma= articulo_mayor::all();
        return view ('Components.nuevo-prestamo-individual',compact('numeroControl','usuarios','articulosme','articulosma'));
        //return($usuarios);
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
        //Aqui leemos el id , que el id podria ser el de un alumno, y leer todos los registros de un alumno
        return view('Alumnos.prestamos');  
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
