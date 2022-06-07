@extends('adminlte::page')

@section('title', 'SILAB')
@section('content_header')
@stop

@section('content')
    <div class="container container-prestamo" id="contenido-pagina-prestamo">
        <div class="control-numero">

               
            <div class="input-control" id="control-numero">
                <div class="label-control">
                    <h4>No. Control</h4>
                </div>
                <form class="form-inline form-buscar form-buscar-prestamo" action="{{ route('Prestamos.create') }}"
                    method="GET" id="numero_control_form">
                    @csrf
                    <div class="btn-grouper">

                        <input class="form-controlq mr-sm-2" type="number" name="search_control" placeholder=""
                            id="input-numero-control" value="{{ $numeroControl }}" onkeypress="enter(e);">



                        {{-- <button class="btn-buscarBarra" type="submit" onclick="enter()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button> --}}
                    </div>


                </form>

            </div>
        </div>

        <div id="tabla-articulos" class="tabla-articulos">
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
                        @if (count($numero_control_sesion) <= 0)
                            {{-- Esto es para que cuando busquemos, si no encuentra nada con algun numero digitado pues muestre el mensaje --}}
                            <tr>
                                {{-- El colspan es para que afecte las 4 columnas --}}
                                <td colspan="4">Sin resultados.</td>
                            </tr>
                        @elseif (count($numero_control_sesion) == 1)
                            @foreach ($numero_control_sesion as $usuario)
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

            <div class="tabla-articulos-agregados tabla-articulos-style-2">
                <div class="container header-div">

                    <div class="form-articulos-prestamo">
                        <form class="form-inline form-buscar form-buscar-prestamo" id="buscar_articulos"
                            action="/articulosMAME" method="post">
                            @csrf
                            <div class="btn-grouper">
                                {{-- Input para mandar token , no basta con csrf de arriba xd --}}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input class="form-controlq mr-sm-2" id="busqueda-articulos" placeholder="Buscar articulo"
                                    name="search_articles">
                                {{-- <button class="btn-buscarBarra" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button> --}}
                            </div>
                        </form>

                    </div>

                </div>

                <table class="tablaAgregados table articulos-style">
                    <thead class="thead-dark">
                        <tr>

                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Numero Serie</th>
                            <th scope="col">Clave</th>
                            <th scope="col">Tipo</th>

                        </tr>
                    </thead>
                    <tbody id="tbodys">
                        
                    </tbody>
                </table>


            </div>
            <div class="input-agregar-cancelar">
                <input type="button" class="btn btn-accion2" value="Cancelar" onclick="cerrarTablas('');">
                <input type="button" class="btn btn-accion1" value="Agregar" onclick="obtenerDatosTabla();">

            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
@section('js')
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {

            $("#busqueda-articulos").keypress(function(e) {
                //no recuerdo la fuente pero lo recomiendan para
                //mayor compatibilidad entre navegadores.
                var code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13) {
                    e.preventDefault();
                    //console.log('prevent default');
                    obtenerDatos();
                }
            });


        });

        function obtenerDatos() {
            // var valor = $("#dato").val();
            $.ajax({
                type: 'POST',
                url: '/articulosMAME',
                data: $('#buscar_articulos').serialize(),
                success: function(res) {
                    var arreglo = JSON.parse(res);
                    for (let x = 0; x < arreglo.length; x++) {


                        let template = `<tr>
                            <td>${arreglo[x].nombre}</td>
                            <td>${arreglo[x].descripcion_articulo}</td>
                            <td>-</td>
                            <td class="clave_producto_td">${arreglo[x].clave_producto}</td>
                            <td>indefinido xd</td>
                            
                            </tr>`;

                        // //$('tbody').append(todo)
                        //console.log(template);
                        $('#tbodys').append(template)
                        //[{"nombre":"jeje","descripcion_articulo":"jeje","clave_producto":"22313123"}]
                    }
                }
            });
        }
        function enter(e){
            var code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13) {
                    e.preventDefault();
                    console.log('prevent default');
                    document.getElementById('busqueda-articulos').focus;
                }
        }
        
        function obtenerDatosTabla() {
            var numeros = [];
            document.querySelectorAll('.tablaAgregados tbody tr').forEach(function(e){
                let fila ={clave_producto: e.querySelector('.clave_producto_td').innerText};
                
                numeros.push(fila);
            });
            // var mi_tabla = document.getElementById('tbodys');
            // var obtenerFila= document.getElementById('clave_produtcto_td');
            // var elementosFila= obtenerFila.getElementsByTagName('td');
            
            // var tabla=mi_tabla.getElementsByTagName("td");
            // for (var i = 0; i < tabla.length; i++) {
            //     numeros.push(tabla[i].innerHTML);
            // }
            return numeros;
        }
    </script>

@stop
