@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')


@section('content')
    <div class="container">
        <div class="filtros-estadistica">
            <div class="elementos-estadistica">
                <label class="form-label" for="fecha">Fecha Inicio</label>
                <input class="form-control" id="fecha" type="date">
            </div>
            <div class="elementos-estadistica">
                <label class="form-label" for="fecha">Fecha Final</label>
                <input class="form-control" id="fecha" type="date">
            </div>
            <div class="elementos-estadistica">
                <label class="form-label" for="carta">Carta</label>
                <select id="carta" class="form-control">
                    <option value="Todas" selected>Todas</option>
                    <option size="5px" class="form-select">Carta no adeudo (Regular)</option>
                    <option size="5px" class="form-select">Carta no adeudo (Egresados)</option>
                    <option size="5px" class="form-select">Carta no adeudo (Baja temporal)</option>
                    <option size="5px" class="form-select">Carta no adeudo (Baja definitiva)</option>
                </select>
            </div>
            <div class="elementos-estadistica">
                <label class="form-label" for="carrera">Carrera</label>
                <select id="carrera" class="form-control">
                    <option value="" selected>Todos</option>
                    <option>Ing. Informatica</option>
                    <option>Ing. Sistemas Automotrices</option>
                    <option>Ing. Gestion Empresarial</option>
                    <option>Ing. Sistemas Computacionales</option>
                    <option>Ing. Industrial</option>
                    <option>Ing. Electromecanica</option>
                    <option>Ing. Electronica</option>
                </select>
            </div>
            <div class="elementos-estadistica">
                <label class="form-label" for="semestre">Semestre</label>
                <select id="semestre" class="form-control">
                    <option value="" selected>Todos</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                </select>
            </div>
        </div>
        <div class="tabla-estadistica">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Area Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="areaChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 324px;"
                            width="648" height="500" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
