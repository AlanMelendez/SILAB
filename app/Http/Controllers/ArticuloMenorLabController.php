<?php

namespace App\Http\Controllers;

use App\articulo_menor_laboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloMenorLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articulos_menores= articulo_mayor_laboratorio::all();
        $articulos_menores= DB::table('articulo_menor_laboratorios')
            -> join ('laboratorios', 'laboratorios.id', '=' , 'articulo_menor_laboratorios.id_laboratorio')
            -> join ('articulo_menors', 'articulo_menor_laboratorios.id_articulo_menor', '=' , 'articulo_menors.id')
            ->select("articulo_menor_laboratorios.id", 'articulo_menors.nombre','articulo_menors.descripcion_articulo', 'articulo_menors.stock', 'articulo_menors.status','articulo_menors.clave_producto', 'laboratorios.nombre_laboratorio' )
            //->where('alumnos.numero_control','LIKE','%'.$numeroControl.'%' )
            ->get();
        return view('ArticulosLaboratorio.Menores.articulos_menores_laboratorio',compact('articulos_menores'));
        //return($articulos_menores);
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
     * @param  \App\articulo_menor_laboratorio  $articulo_menor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(articulo_menor_laboratorio $articulo_menor_laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\articulo_menor_laboratorio  $articulo_menor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(articulo_menor_laboratorio $articulo_menor_laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\articulo_menor_laboratorio  $articulo_menor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, articulo_menor_laboratorio $articulo_menor_laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articulo_menor_laboratorio  $articulo_menor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulo_menor_laboratorio $articulo_menor_laboratorio)
    {
        //
    }
}
