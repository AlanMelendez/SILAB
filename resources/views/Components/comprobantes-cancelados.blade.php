@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
@stop

@section('content')

    <body>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Nombre(s)</th>
                    <th>Apellido(s)</th>
                    <th>No. Control</th>
                    <th>Semestre</th>
                    <th>Carrera</th>
                    <th>Fecha</th>
                    <th>Progress</th>
                    <th style="width: 40px">%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Alan</td>
                    <td>Cuevas Melendez</td>
                    <td>192310781</td>
                    <td>6</td>
                    <td>Ing. Informatica</td>
                    <td>22/04/2022</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" style="width: 0%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-warning">0%</span></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Sebastian</td>
                    <td> Alcantar Rangel</td>
                    <td>192310781</td>
                    <td>6</td>
                    <td>Ing. Informatica</td>
                    <td>22/04/2022</td>
                    <td>
                        <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-danger" style="width: 1%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-warning">0%</span></td>
                </tr>
            </tbody>
        </table>
    </body>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
