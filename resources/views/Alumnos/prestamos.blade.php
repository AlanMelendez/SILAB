@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
@stop

@section('content')
    @component('Components.barra-navegacion')
            
    @endcomponent
    @component('Components.nuevo-prestamo')
    @endcomponent
   @component('Components.tabla-contenido')
   @endcomponent
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
