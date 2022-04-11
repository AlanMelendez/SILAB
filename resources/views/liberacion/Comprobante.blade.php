@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <div class="titulo-container">
        <h2 class="titulo-head">ALUMNOS LIBERADOS</h2>
    </div>
@stop

@section('content')

<div class="row">
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit">Buscar Alumno</button>
      </form>
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
                    <td style="">8/04/2022</td>
                    <td style=""><button type="button" class="btn btn-success">O</button>
                        <button type="button" class="btn btn-danger">X</button></td>
                </tr>
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">Monica</td>
                    <td style="">Guadalupe</td>
                    <td style="">192331232</td>
                    <td style="">8/04/2022</td>
                    <td style=""><button type="button" class="btn btn-success">O</button>
                        <button type="button" class="btn btn-danger">X</button></td>
                </tr>
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">Maria</td>
                    <td style="">Guadalupe</td>
                    <td style="">192332131</td>
                    <td style="">8/04/2022</td>
                    <td style=""><button type="button" class="btn btn-success">O</button>
                        <button type="button" class="btn btn-danger">X</button></td>
                </tr>
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">Daniela</td>
                    <td style="">pena</td>
                    <td style="">192321370</td>
                    <td style="">8/04/2022</td>
                    <td style=""><button type="button" class="btn btn-success">O</button>
                        <button type="button" class="btn btn-danger">X</button></td>
                </tr>
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">Sebas</td>
                    <td style="">Alcantar</td>
                    <td style="">192312310</td>
                    <td style="">8/04/2022</td>
                    <td style=""><button type="button" class="btn btn-success">O</button>
                        <button type="button" class="btn btn-danger">X</button></td>
                </tr>
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">Damaris</td>
                    <td style="">Guadalupe</td>
                    <td style="">192312312</td>
                    <td style="">8/04/2022</td>
                    <td style=""><button type="button" class="btn btn-success">O</button>
                        <button type="button" class="btn btn-danger">X</button></td>
                </tr>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">



@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

