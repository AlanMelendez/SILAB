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
    <link href="toastr.css" rel="stylesheet"/>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{asset('sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

@stop