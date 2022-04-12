@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <h1>PRESTAMOS SECCION PARA MAESTROS</h1>
@stop

@section('content')
    @component('Components.barraNavegacion')
            
    @endcomponent
   @component('Components.tablaContenido')
       
   @endcomponent
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
