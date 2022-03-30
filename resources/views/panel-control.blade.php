@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <h1>SILAB</h1>
@stop

@section('content')
    <h2>Tabla para mostrar todos los prestamos</h2>
    <div class="table">
        <table></table>
    
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop