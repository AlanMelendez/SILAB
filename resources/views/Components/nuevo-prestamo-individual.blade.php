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
                <form class="form-inline form-buscar form-buscar-prestamo">
                    <div class="btn-grouper">
    
                        <input class="form-controlq mr-sm-2" type="number" placeholder="" aria-label="Search">
                       
                        <button class="btn-buscarBarra" type="submit" onclick="mostrarTablas();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div id="tabla-articulos" class="tabla-articulos">
            <div class="form-articulos-prestamo">
                <form class="form-inline form-buscar form-buscar-prestamo">
                    <div class="btn-grouper">
    
                        <input class="form-controlq mr-sm-2" type="search" id="articulo-mayores" placeholder="Buscar articulo" aria-label="Search">
                        <button class="btn-buscarBarra" type="submit" onclick="agregarArticulo()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="tablas-articulos-prestamos">
                <div class="tabla-articulos-menores tabla-articulos-style">
                  <label for="articulos-menores">ARTICULOS MENORES</label>
                    <table id="articulos-menores"class="table articulos-style">
                        <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th scope="col">ID</th>
                                <th scope="col">Articulo</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Clave</th>
                                <th scope="col">Stock</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><input type="checkbox" name="select" id=""></th>
                               <th>1</th>
                               <th>Resistencia</th>
                               <th>Global</th>
                               <th>Resistencia 20k</th>
                               <th>1001</th>
                               <th>Si</th>
                            </tr>
                            <tr>
                                <th><input type="checkbox" name="select" id=""></th>
                                <th>2</th>
                                <th>Cables</th>
                                <th>Generico</th>
                                <th>Cables pinza caiman</th>
                                <th>1002</th>
                                <th>Si</th>
                             </tr>
                             <tr>
                                <th><input type="checkbox" name="select" id=""></th>
                                <th>3</th>
                                <th>Lentes</th>
                                <th>Global</th>
                                <th>lentes proteccion transparentes</th>
                                <th>1005</th>
                                <th>Si</th>
                             </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tabla-articulos-mayores tabla-articulos-style">
                  <label for="articulos-mayores">ARTICULOS MAYORES</label>
                    <table id="articulos-mayores" class="table articulos-style">
                        <thead class="thead-light">
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
                            <tr>
                                <th >1</th>
                                <th >Cautin</th>
                                <th>Truper</th>
                                <th>Cautin punta cuadrada</th>
                                <th>1003</th>
                                <th>99999999</th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>Arduino Uno R3</th>
                                <th>Arduino</th>
                                <th>Arduino color azul</th>
                                <th>1004</th>
                                <th>88888888</th>
                            </tr>
                            
                        </tbody>
                    </table>

                    
                </div>
                
            </div>
            <div class="tabla-articulos-agregados tabla-articulos-style-2">
                <label for="articulos-agregados">ARTICULOS AGREGADOS</label>
                  <table id="articulos-agregados" class="table articulos-style">
                      <thead class="thead-light">
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
                              <td>@twitter</td> --}}
                          </tr>
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
    <script src="{{asset('js/app.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stop
