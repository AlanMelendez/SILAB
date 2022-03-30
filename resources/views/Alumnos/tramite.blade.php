@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <h1>SILAB</h1>
@stop

@section('content')
  <div class="container form-tramite">
    <form>
      <label for="" class="form-label">Ingresa tu nombre</label>
      <input type="text" name="nombre-alumno" id="">
      <label for="" class="form-label">Tipo de tramite:</label>
      <input type="radio" name="bajaT" id="bajaT">
      <label for="bajaT" class="form-label">Baja Temporal</label>
      <input type="radio" name="bajaD" id="">
      <label for="bajaD" class="form-label">Baja Definitiva</label>
    </form>
  </div>
@stop
