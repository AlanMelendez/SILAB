@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <h1>SILAB</h1>
@stop

@section('content')
  <h2 class="saludo">PAGINA DE BIENVENIDA!!!!!</h2>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop