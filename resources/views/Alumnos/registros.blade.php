@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <h1>PRESTAMOS SECCION PARA MAESTROS</h1>
@stop

@section('content')
@component('Components.barraNavegacion')
  @slot('classNav')
@endcomponent
  @component('Components.tablaContenido')
   
  
  @endcomponent
@endsection