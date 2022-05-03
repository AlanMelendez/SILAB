@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    {{-- <h1>REGISTRO PRESTAMOS SECCION PARA MAESTROS</h1> --}}
@stop

@section('content')
    <div class="container-nav">
        <div class="">
            <form class="form-inline form-buscar">
                <div class="btn-grouper">

                    <input class="form-controlq mr-sm-2" type="search" placeholder="Buscar registro" aria-label="Search">
                    <button class="btn-buscarBarra">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="btn-grouper1">
            <div class="dt-buttons btn-group   col-sm-6">

                <div class="btn-group">
                    <button type="button" class="btn btn-agregar" data-toggle="modal" data-target="#modal-filtro">
                        Filtros
                    </button>

                </div>
                <div class="btn-group">
                    <button class="btn btn-agregar dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Descargar
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" type="button" onclick="" data-toggle="" data-target="">Excel</a>
                        <a class="dropdown-item" type="button" onclick="" data-toggle="" data-target="">PDF</a>
                        <a class="dropdown-item" type="button" onclick="" data-toggle="" data-target="">Imprimir</a>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-recargar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="25" height="25">
                            <path fill-rule="evenodd"
                                d="M8 2.5a5.487 5.487 0 00-4.131 1.869l1.204 1.204A.25.25 0 014.896 6H1.25A.25.25 0 011 5.75V2.104a.25.25 0 01.427-.177l1.38 1.38A7.001 7.001 0 0114.95 7.16a.75.75 0 11-1.49.178A5.501 5.501 0 008 2.5zM1.705 8.005a.75.75 0 01.834.656 5.501 5.501 0 009.592 2.97l-1.204-1.204a.25.25 0 01.177-.427h3.646a.25.25 0 01.25.25v3.646a.25.25 0 01-.427.177l-1.38-1.38A7.001 7.001 0 011.05 8.84a.75.75 0 01.656-.834z">
                            </path>
                        </svg>
                    </button>

                </div>

            </div>

        </div>



    </div>

    <div class="tabla-contenido-resgistros">
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="/css/admin_custom.css">
            <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
            <title>Document</title>
        </head>

        <body>
            <div class="modal fade" id="modal-filtro" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="modal-filtro" aria-hidden="true">
                <div class="modal-dialog modal-center" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-filtro">FILTRADO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-filtro">
                                <div class="container-filtrado-1">
                                    <div class="elemento-filtro">
                                        <label class="form-label" for="fechaInicio">Fecha Inicio</label>
                                        <input type="date" name="fechaInicio" id="fechaInicio">
                                    </div>
                                    <div class="elemento-filtro">
                                        <label class="form-label" for="fechaFin">Fecha Fin</label>
                                        <input type="date" name="fechaFin" id="fechaFin">
                                    </div>
                                </div>
                            </div>
                            <div class="container-filtro">
                                <div class="container-filtrado-1">
                                    <div class="elemento-filtro">
                                        <label class="form-label" for="semestre">Semestre</label>
                                        <select id="semestre" class="form-control">
                                            <option>No</option>
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
                                    <div class="elemento-filtro">
                                        <label class="form-label" for="carrera">Carrera</label>
                                        <select id="carrera" class="form-control">
                                            <option>No</option>
                                            <option>Ing. Informatica</option>
                                            <option>Ing. Sistemas Automotrices</option>
                                            <option>Ing. Gestion Empresarial</option>
                                            <option>Ing. Sistemas Computacionales</option>
                                            <option>Ing. Industrial</option>
                                            <option>Ing. Electromecanica</option>
                                            <option>Ing. Electronica</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-accion2" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-accion1">Filtrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">

                <div class="card-body">
                    <div id="example1_wrapper" class="tabla-datos dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="tabla-component col-lg-12">
                                <table id="example1" class="table table-hover table-striped dataTable dtr-inline"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">ID
                                            </th>
                                            <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="">Nombre</th>
                                            <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                                style="">Apellidos
                                            </th>
                                            <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Engine version: activate to sort column ascending"
                                                style="">No. Control</th>
                                            <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                style="">Carrera</th>
                                            <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                style="">Articulos</th>
                                            <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                style="">Descripcion</th>
                                            <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                style="">Fecha</th>
                                                <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                style="">Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">1</td>
                                            <td style="">Alan</td>
                                            <td style="">Cuevas Melendez</td>
                                            <td style="">192310781</td>
                                            <td style="">Ing. Informatica</td>
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
                                            <td>26-04-2022</td>
                                            <td>Activo</td>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">2</td>
                                            <td style="">Sebastian</td>
                                            <td style="">Alcantar Rangel</td>
                                            <td style="">192310781</td>
                                            <td style="">Ing. Informatica</td>
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
                                            <td>26-04-2022</td>
                                            <td>Activo</td>
                                            
                                        </tr>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">3</td>
                                            <td style="">Jose Alfredo</td>
                                            <td style="">Galvan Medrano</td>
                                            <td style="">192310781</td>
                                            <td style="">Ing. Informatica</td>
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
                                            <td>26-04-2022</td>
                                            <td>Activo</td>
                                            
                                        </tr>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">4</td>
                                            <td style="">Guadalupe</td>
                                            <td style="">Torres Caballeros</td>
                                            <td style="">192310781</td>
                                            <td style="">Ing. Informatica</td>
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
                                            <td>26-04-2022</td>
                                            <td>Activo</td>
                                            
                                        </tr>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">5</td>
                                            <td style="">Karen Daniela</td>
                                            <td style="">Pena Estala</td>
                                            <td style="">192310781</td>
                                            <td style="">Ing. Informatica</td>
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
                                            <td>26-04-2022</td>
                                            <td>Activo</td>
                                            
                                        </tr>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">1</td>
                                            <td style="">Monica Guadalupe</td>
                                            <td style="">Reyes Ornelas</td>
                                            <td style="">192310781</td>
                                            <td style="">Ing. Informatica</td>
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
                                            <td>26-04-2022</td>
                                            <td>Activo</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1
                                    to 10 of
                                    57 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a
                                                href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                                aria-controls="example1" data-dt-idx="7" tabindex="0"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <p> </p>
        </body>

        </html>
    </div>
@endsection
