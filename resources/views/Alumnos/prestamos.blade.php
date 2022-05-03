@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
@stop

@section('content')
    
    @component('Components.barra-navegacion')    
    @endcomponent
    
    {{-- MODALES PARA ACTIVAR SEGUN EL BOTON --}}

    {{-- @component('Components.nuevo-prestamo-individual')
    @endcomponent --}}
{{--     
    @component('Components.nuevo-prestamo-grupal')
    @endcomponent --}}

   @component('Components.tabla-contenido')
   @endcomponent
   
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
