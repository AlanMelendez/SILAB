@extends('adminlte::page')
@section('title', 'SILAB')
<head>
  <link href="{{ asset('resources/css/tramite.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  <link rel="stylesheet" href="css/tramites.css">
</head>
@section('content')
<div class="navbar">
  <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" style="margin-right: 525px;">ADEUDOS PARA ALUMNOS</a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </nav>
</div>
<div class="table">
    <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">No. Control</th>
            <th scope="col">Material</th>
            <th scope="col">Cantidad</th>
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
            <td>Caguama</td>
            <td>13</td>
            <td>25 marzo</td>
            <td><a class="fa fa-trash" aria-hidden="true" style="color: red; margin-right:25px;" ></a><a class="fa fa-cog" aria-hidden="true"></a></td>          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Sebastian</td>
            <td>Alcantar</td>
            <td>192xxxx</td>
            <td>Caguama</td>
            <td>9</td>
            <td>27 marzo</td>
            <td><a class="fa fa-trash" aria-hidden="true" style="color: red; margin-right:25px;" ></a><a class="fa fa-cog" aria-hidden="true"></a></td>          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Lupita</td>
            <td>Torres</td>
            <td>192xxxx</td>
            <td>Caguama</td>
            <td>10</td>
            <td>21 marzo</td>
            <td><a class="fa fa-trash" aria-hidden="true" style="color: red; margin-right:25px;" ></a><a class="fa fa-cog" aria-hidden="true"></a></td>
          </tr>
        </tbody>
      </table>
  </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop

