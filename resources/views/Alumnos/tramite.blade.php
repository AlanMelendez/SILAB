@extends('adminlte::page')


@section('title', 'SILAB')

@section('content_header')
  @include('Alumnos.tramiteLayout') {{-- Agregamos la vista del archivo adeudolayout --}}
@stop

@section('content')
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
