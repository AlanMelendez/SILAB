@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <h1>PRESTAMOS SECCION PARA MAESTROS</h1>
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
                
            </div>
            
        </div>
   
    

</div>
            
    </div>
  @component('Components.tabla-contenido')
   
  
  @endcomponent
@endsection