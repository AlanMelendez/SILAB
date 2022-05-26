<?php

namespace App\Http\Controllers;
use App\articulo_mayor;

use Illuminate\Http\Request;

class ArticulosMayoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articulos_mayores = articulo_mayor::all(); //Sacamos los datos del modelo
        return view('Laboratoristas/articulos', array('articulos'=> $articulos_mayores)); // Los pasamos por el controlador ala vista, para asi mostrarlos en la tabla.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Components.articulos-modal'); //vista modal de agregar articulos mayores
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // print_r($_POST);
        //en la variable almacenamos los datos del modelo, QUE VAMOS A INSERTAR.
        $articuloMa = new articulo_mayor;
        $articuloMa-> nombre= $request->input('nombre');
        $articuloMa-> descripcion_articulo= $request->input('descripcion');
        $articuloMa-> status='1';
        $articuloMa-> numero_serie= $request->input('numero_serie');
        $articuloMa-> clave_producto= $request->input('codigo_articulo');
        $articuloMa->save(); //Guardamos los datos
        

        return redirect()->route("Articulos_mayores.index")->with('success','Agregado con exito'); //Redirigimos ala pagina index, Y catcheamos cualquier errot con with.


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
        $articulo = articulo_mayor::find($id);
        return view('Components.art_mayores_edit', compact('articulo')); //Regresamos la vista, y mandamos los datos para que la vista reciba los datos

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
        $articulo = articulo_mayor::findOrFail($id);
        $articulo->nombre= $request->input('nombre');  //En el campo input , va literalmente lo que pusimos en el atributo name del input.
        $articulo->descripcion_articulo = $request->input('descripcion');
        $articulo->numero_serie = $request->input('numero_serie');
        $articulo->clave_producto = $request->input('codigo_articulo');
        $articulo->status = $request->input('status');
        

        $articulo->save();
        return redirect()->route("Articulos_mayores.index")->with('success','Actualizado con exito'); //Redirigimos ala pagina index, Y catcheamos cualquier errot con with.
    }
    
    public function updateStatus(Request $request, $id){
        // $state = articulo_mayor::findOrFail($request->id)->update()
        $articulo= articulo_mayor::findOrFail($id);
        
        $articulo->save();
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
