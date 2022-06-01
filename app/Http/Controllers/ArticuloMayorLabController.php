<?php

namespace App\Http\Controllers;

use App\articulo_mayor_laboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloMayorLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $articulos_menores= articulo_mayor_laboratorio::all();
        $articulos_mayores= DB::table('articulo_mayor_laboratorios')
            -> join ('laboratorios', 'laboratorios.id', '=' , 'articulo_mayor_laboratorios.id_laboratorio')
            -> join ('articulo_mayors', 'articulo_mayor_laboratorios.id_articulo_mayor', '=' , 'articulo_mayors.id')
            ->select("articulo_mayor_laboratorios.id", 'articulo_mayors.nombre','articulo_mayors.descripcion_articulo', 'articulo_mayors.numero_serie', 'articulo_mayors.status', 'laboratorios.nombre_laboratorio' )
            //->where('alumnos.numero_control','LIKE','%'.$numeroControl.'%' )
            ->get();
        return view('ArticulosLaboratorio.Mayores.articulos_mayores_laboratorio',compact('articulos_mayores'));
        //return($articulos_mayores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\articulo_mayor_laboratorio  $articulo_mayor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(articulo_mayor_laboratorio $articulo_mayor_laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\articulo_mayor_laboratorio  $articulo_mayor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(articulo_mayor_laboratorio $articulo_mayor_laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\articulo_mayor_laboratorio  $articulo_mayor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, articulo_mayor_laboratorio $articulo_mayor_laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articulo_mayor_laboratorio  $articulo_mayor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulo_mayor_laboratorio $articulo_mayor_laboratorio)
    {
        //
    }
}
