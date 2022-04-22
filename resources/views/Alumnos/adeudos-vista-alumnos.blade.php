@extends('adminlte::page')
@section('title', 'SILAB')

@section('content')
    <div class="container container-scroll">
        <div class="card card-tramite">
            <div class="card-header">
                <h3 class="card-title">TRAMITES</h3>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Tramite</th>
                            <th>Progreso</th>
                            <th style="width: 20px">Porcentaje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Carta no adeudo (Regular)</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-danger">55%</span></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-warning">70%</span></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">30%</span></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Fix and squish bugs</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-success">90%</span></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card card-tramite">
            <div class="card-header">
                <h3 class="card-title">ADEUDOS</h3>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">No. Control</th>
                        <th scope="col">Laboratorio</th>
                        <th scope="col">Articulos</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Alan</td>
                        <td>Cuevas</td>
                        <td>192xxxx</td>
                        <td>Computo</td>
                        <td>5</td>
                        <td>
                        <select class="form-control">
                            <option>Cautin</option>
                            <option>Multimetro</option>
                            <option>Pinzas</option>
                            <option>Cables caiman</option>
                            <option>Resistencias</option>
                        </select>
                        </td>
                        <td>25 marzo</td>
                        <td><a class="fa fa-trash" aria-hidden="true" style="color: red; margin-right:25px;" ></a><a class="fa fa-cog" aria-hidden="true"></a></td>          </tr>
                    
                    </tbody>
                </table>
            </div>

        </div>
        
    </div>
   
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
