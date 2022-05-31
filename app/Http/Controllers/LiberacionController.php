<?php

namespace App\Http\Controllers;

use App\tramite;
use App\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiberacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('Liberacion/liberados');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         //forma 1 de traer los datos
         $liberacion= tramite::all(); //Leemos el modelo (La base de datos)

         //forma 2 de traer los datos
         $tramite = DB::table('tramites')
         ->join('alumnos','alumnos.id', '=' , 'tramites.id_alumno')
         ->join('oficios','oficios.id', '=' , 'tramites.id_oficio')
         ->select('tramites.id','tramites.fecha','tramites.status','tramites.id_oficio','tramites.id_alumno')
         ->get();
         return view('liberacion.Comprobante', compact('tramite')); //Mandamos un array ala vista para capturar los datos y mostrarlos.
        

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
