@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
@stop

@section('content')
 
<div class="card card-tramite">
    <div class="card-header">
        <h3 class="card-title" style="color: blue; font-weight: bold;">PRESTAMOS TERMINADOS</h3>
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
                <th>Status</th>
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
                    <td>25/04/2022</td>
                    <td>Terminado</td>
                </tr>
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
                    <td>24/04/2022</td>
                    <td>Terminado</td>
                </tr>
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
                    <td>23/04/2022</td>
                    <td>Terminado</td>
                </tr>
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
                    <td>22/04/2022</td>
                    <td>Terminado</td>
                </tr>
                
            </tbody>
        </table>
    </div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
