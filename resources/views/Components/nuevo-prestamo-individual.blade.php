@extends('adminlte::page')

@section('title', 'SILAB')
@section('content_header')
@stop

@section('content')
    <div class="container container-prestamo" id="contenido-pagina-prestamo">
        <div class="control-numero">
            <div class="label-control">
                <h4>No. Control</h4>
            </div>
            <div class="input-control">
                <form class="form-inline form-buscar form-buscar-prestamo" action="{{ route('Prestamos.create') }}"
                    method="GET">
                    @csrf
                    <div class="btn-grouper">

                        <input class="form-controlq mr-sm-2" type="number" name="search_control" placeholder=""
                            value="{{ $numeroControl }}">



                        <button class="btn-buscarBarra" type="submit" onclick="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>


                </form>

            </div>
        </div>

        <div id="tabla-articulos" class="tabla-articulos" style="display: block !important">
            <div class="nombre_alumno">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Numero Control</th>
                            <th scope="col">Carrera</th>
                            <th scope="col">Semestre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($usuarios) <= 0)
                            {{-- Esto es para que cuando busquemos, si no encuentra nada con algun numero digitado pues muestre el mensaje --}}
                            <tr>
                                {{-- El colspan es para que afecte las 4 columnas --}}
                                <td colspan="4">Sin resultados.</td>
                            </tr>
                        @elseif (count($usuarios) == 1)
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <th scope="row">{{ $usuario->name }}</th>
                                    <td>{{ $usuario->numero_control }}</td>
                                    <td>{{ $usuario->carrera }}</td>
                                    <td>{{ $usuario->semestre }}</td>
                                </tr>
                            @endforeach
                        @endif


                    </tbody>
                </table>
            </div>
            <div class="form-articulos-prestamo">
                <form class="form-inline form-buscar form-buscar-prestamo">
                    <div class="btn-grouper">

                        <input class="form-controlq mr-sm-2" type="search" id="busqueda-articulos"
                            placeholder="Buscar articulo" aria-label="Search">
                        <button class="btn-buscarBarra" type="submit" onclick="agregarArticulo()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="tablas-articulos-prestamos">
                <div class="tabla-articulos-menores tabla-articulos-style">
                    <label for="articulos-menores">ARTICULOS MENORES</label>
                    <table id="articulos-menores" class="table articulos-style">
                        <thead class="thead-dark">
                            <tr>
                                {{-- <th scope="col">ID</th> --}}
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Status</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Clave</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articulosme as $articulo)
                                <tr>
                                    {{-- <td class="dtr-control sorting_1" tabindex="0">{{ $articulo->id }}</td> --}}
                                    <td style="">{{ $articulo->nombre }}</td>
                                    <td style="">{{ $articulo->descripcion_articulo }}</td>
                                    <td style="">{{ $articulo->status }}</td>
                                    <td style="">{{ $articulo->stock }}</td>
                                    <td>{{ $articulo->clave_producto }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tabla-articulos-mayores tabla-articulos-style">
                    <label for="articulos-mayores">ARTICULOS MAYORES</label>
                    <table id="articulos-mayores" class="table articulos-style">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Articulo</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Clave</th>
                                <th scope="col">No. Serie</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articulosma as $articulo)
                                <tr data-select="0">
                                    {{-- <td class="dtr-control sorting_1" tabindex="0">{{ $articulo->id }}</td> --}}
                                    <td class="dtr-control sorting_1" tabindex="0">{{ $articulo->id }}</td>
                                    <td style="">{{ $articulo->nombre }}</td>
                                    <td style="">{{ $articulo->descripcion_articulo }}</td>
                                    <td style="">{{ $articulo->status }}</td>
                                    <td style="">{{ $articulo->numero_serie }}</td>
                                    <td>{{ $articulo->clave_producto }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>


                </div>

            </div>
            <div class="tabla-articulos-agregados tabla-articulos-style-2">
                <label for="articulos-agregados">ARTICULOS AGREGADOS</label>
                <table id="articulos-agregados" class="table articulos-style">
                    <thead class="thead-dark">
                        <tr>

                            <th scope="col">Articulo</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Clave</th>
                        </tr>
                    </thead>
                    <tbody id="body-agregados">
                        {{-- <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                        </tr> --}}
                    </tbody>
                </table>


            </div>
            <div class="input-agregar-cancelar">
                <input type="button" class="btn btn-accion2" value="Cancelar" onclick="cerrarTablas('');">
                <input type="button" class="btn btn-accion1" value="Agregar" onclick="cerrarTablas('agregar');">

            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stop
