@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <div class="titulo-container">
        <h2 class="titulo-head">INICIAR LIBERACION</h2>
    </div>
@stop

@section('content')
            <h5> Instructivo basico para crear tu comprobante de liberacion: </h5>
            <ul> 1. Rellenar cada punto que se te pide.
            <dl> 2. Presionar en el boton Generar.
            <dl> 3. Descargar tu comprobante.</dl>
            </ul>

            &nbsp;

            <div class="form-nombre">
                <label for="exampleFormControlInput1">Nombre Alumno</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Jose Alfredo">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Apellidos</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Galvan Medrano">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Numero Control</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="192317538">
            </div>


            <div class="form-group">
                <label for="exampleFormControlSelect1">Semestre</label>
                <select class="form-control" id="exampleFormControlSelect1">
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
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Ingenierias</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>ING. INFORMATICA</option>
                <option>ING. SISTEMAS</option>
                <option>ING. SISTEMAS AUTOMOTRICES</option>
                <option>ING. AMBIENTAL</option>
                <option>ING. INDUSTRIAL</option>
                <option>ING. GESTION EMPRESARIAL</option>
                <option>ING. ELECTRONICA</option>
                </select>
            </div>

            <button type="button" class="btn btn-dark">Generar Liberacion</button>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">



@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


