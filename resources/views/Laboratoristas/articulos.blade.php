@extends('adminlte::page')

@section('title', 'SILAB')
<head>
  <link rel="stylesheet" href="css/tramites.css">
</head>
@section('content')
<div class="container titulo">
      <h5 class="titulo-head">Agregar articulo</h5>
  </div>

<form>
  <form>
  <div class="form-row">
    <div class="col">
      <label for="inputAddress">Código</label>
      <input type="text" class="form-control" placeholder="25v ">
    </div>
    <div class="col">
      <label for="inputAddress">Nombre</label>
      <input type="text" class="form-control" placeholder="Desarmador">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Marca</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="SURTEK">
  </div>
  <div class="form-group">
    <label for="inputAddress">Descripción</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Color amarillo">
  </div>


<form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Laboratorio</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Laboratorio </option>
    <option value="1">Industrial</option>
    <option value="2">Química</option>
    <option value="3">Electromecánica</option>
    <option value="3">Física</option>
  </select>
</form>

<button type="submit" class="btn btn-primary">Añadir</button>
</form>
<div class="navbar">
  <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" style="margin-right: 525px;">Lista de artículos</a>
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
            <th scope="col">Id-Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Descripción</th>
            <th scope="col">Laboratorio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>25V</td>
            <td>Desarmador</td>
            <td>Surtek</td>
            <td>Color amarillo</td>
            <td>Laboratorio de Electromecánica</td>
            <td><a class="fa fa-trash" aria-hidden="true" style="color: red; margin-right:25px;" ></a><a class="fa fa-cog" aria-hidden="true"></a></td>          </tr
        </tbody>
      </table>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop

