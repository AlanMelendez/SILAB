@extends('adminlte::page')

@section('title', 'SILAB')
@section('content_header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content')
<table class="tablaAgregados table articulos-style">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>

            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Clave Producto</th>

        </tr>
    </thead>
    <tbody id="tbodys">
            <tr>
                <td>{{$prestamo[0]->id}}</td>
                {{-- <td>{{$prestamo[0]->id_articulo_mayor}}</td> --}}
                <td>{{$prestamo[0]->nombre}}</td>
                <td>{{$prestamo[0]->descripcion_articulo}}</td>
                
                {{-- <td>{{$prestamo->}}</td> --}}
                
                <td>{{$prestamo[0]->id_prestamo}}</td>
            </tr>

    </tbody>
</table>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
