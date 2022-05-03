@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
@stop

@section('content')
    
<div class="container container-scroll">
    <div class="card card-tramite">
        <div class="card-header">
            <h3 class="card-title" style="color: blue; font-weight: bold;">TRAMITES TERMINADOS</h3>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Tramite</th>
                        <th>Fecha</th>
                        <th>Progreso</th>
                        <th style="width: 20px">Porcentaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Carta no adeudo (Regular)</td>
                        <td>01/05/2022</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-success">100%</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Carta no adeudo (Regular)</td>
                        <td>22/04/2022</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-success">100%</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Carta no adeudo (Regular)</td>
                        <td>23/04/2022</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-success">100%</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Carta no adeudo (Regular)</td>
                        <td>23/04/2022</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-success">100%</span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Carta no adeudo (Regular)</td>
                        <td>24/04/2022</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-success">100%</span></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Carta no adeudo (Regular)</td>
                        <td>25/04/2022</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-success">100%</span></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

    </div>
   

    </div>
    
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
