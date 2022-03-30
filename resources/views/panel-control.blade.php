@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <h1>SILAB</h1>
@stop

@section('content')
    <h2>Tabla para mostrar todos los prestamos</h2>
    <div class="table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">No. Control</th>
                <th scope="col">Material</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Fecha</th>
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
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Sebastian</td>
                <td>Alcantar</td>
                <td>192xxxx</td>
                <td>Caguama</td>
                <td>9</td>
                <td>27 marzo</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Lupita</td>
                <td>Torres</td>
                <td>192xxxx</td>
                <td>Caguama</td>
                <td>10</td>
                <td>21 marzo</td>
              </tr>
            </tbody>
          </table>
    
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop