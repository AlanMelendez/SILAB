@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <div class="titulo-container">
        <h2 class="titulo-head">ALUMNOS LIBERADOS</h2>
    </div>
@stop

@section('content')

<div class="row">
    <div class="container navegacion-barra">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit">Buscar Alumno</button>
        </form>
    </div>
    <div class="col-sm-12">
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
            aria-describedby="example1_info">
            <thead>
                <tr>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending" style="">Nombre</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Platform(s): activate to sort column ascending" style="">Apellidos
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending" style="">No. Control</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending" style="">Carrera</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style="">Fecha</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending" style="">Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">Jose Alfredo</td>
                    <td style="">Galvan Medrano</td>
                    <td style="">192310670</td>
                    <td style="">Ing. Informatica</td>
                    <td style="">8/04/2022</td>
                    <td style="">
                            <button class="btn btn-succes alan">Iniciado</button>
                    </td>
                </tr>
                
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

