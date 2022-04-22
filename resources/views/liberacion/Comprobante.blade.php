@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    {{-- <div class="titulo-container">
        <h2 class="titulo-head">ALUMNOS LIBERADOS</h2>
    </div> --}}
@stop

@section('content')

<div class="row">
    <div class="barra-buscar barra-comprobante">
        <form class="form-inline form-buscar">
            <div class="btn-grouper">

                <input class="form-controlq mr-sm-2" type="search" placeholder="Buscar registro" aria-label="Search">
                <button class="btn-buscarBarra">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
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
                    aria-label="CSS grade: activate to sort column ascending" style="">Comprobante</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending" style="">Estado</th>
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
                    <td>Regular</td>
                    <td>Sin adeduos</td>
                    <td class="btn-acciones">
                            <button class="btn btn-succes btn-accion1 ">Liberar</button>
                            <button class="btn btn-succes btn-accion2">Anular</button>
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

