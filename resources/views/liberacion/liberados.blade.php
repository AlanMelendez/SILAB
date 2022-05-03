@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    {{-- <h1>ALUMNOS LIBERADOS SECCION PARA MAESTROS</h1> --}}
@stop

@section('content')
    <div class="container-nav">
        <div class="">
            <form class="form-inline form-buscar">
                <div class="btn-grouper">

                    <input class="form-controlq mr-sm-2" type="search" placeholder="Buscar registro" aria-label="Search">
                    <button class="btn-buscarBarra">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
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
                    <button class="btn btn-agregar dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="25" height="25"><path fill-rule="evenodd" d="M8 2.5a5.487 5.487 0 00-4.131 1.869l1.204 1.204A.25.25 0 014.896 6H1.25A.25.25 0 011 5.75V2.104a.25.25 0 01.427-.177l1.38 1.38A7.001 7.001 0 0114.95 7.16a.75.75 0 11-1.49.178A5.501 5.501 0 008 2.5zM1.705 8.005a.75.75 0 01.834.656 5.501 5.501 0 009.592 2.97l-1.204-1.204a.25.25 0 01.177-.427h3.646a.25.25 0 01.25.25v3.646a.25.25 0 01-.427.177l-1.38-1.38A7.001 7.001 0 011.05 8.84a.75.75 0 01.656-.834z"></path></svg>
                    </button>
                      
                </div>
                
            </div>
            
        </div>    
    </div>
    <div class="modal fade" id="modal-filtro" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-filtro" aria-hidden="true">
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
                  <div class="elemento-filtro"> 
                    <label class="form-label" for="oficio">Oficio</label>
                    <select id="oficio" class="form-control">
                      <option>No</option>
                      <option>Todos</option>
                      <option>Carta no adeudo (Regular)</option>
                      <option>Carta no adeudo (B. Temporal)</option>
                      <option>Carta no adeudo (B. Definitiva)</option>
                      <option>Carta no adeudo (Egresados)</option>
                      
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
  @component('Components.tabla-liberados')
   
  
  @endcomponent
@endsection