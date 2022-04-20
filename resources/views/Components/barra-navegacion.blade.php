<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-nav">
        <div class="container-navegacion-1">
            <div class="dt-buttons btn-group   col-sm-6"> 
                <button
                    class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1"
                    type="button"><span>Excel</span>
                </button> 
                <button
                    class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1"
                    type="button"><span>PDF</span>
                </button>
                <button class="btn btn-secondary buttons-print"
                    tabindex="0" aria-controls="example1" type="button"><span>Imprimir</span>
                </button>
                
                <div class="btn-group">
                    <button
                        class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0"
                        aria-controls="example1" type="button" aria-haspopup="true"><span>Filtros</span><span class="dt-down-arrow"></span>
                    </button>
                </div>
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Agregar
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        {{-- <button
                        class="btn btn-succes dropdown-item" onclick="ventanaModal();" tabindex="0" aria-controls="example1"
                        data-toggle="modal" data-target="#staticBackdrop"
                        type="button"><span>Prestamo individual</span>
                        </button> --}}
                      <a class="dropdown-item" onclick="ventanaModal();" tabindex="0" aria-controls="example1"
                      data-toggle="modal" data-target="#staticBackdrop"
                      type="button">Prestamo individual</a>
                      <a class="dropdown-item" type="button" onclick="ventanaModal2();" data-toggle="modal" data-target=".bd-example-modal-xl">Prestamo grupal</a>
                      

                    </div>
                </div>
                
            </div>
            
        </div>
        {{-- <div class=" ">
            <input type="search" id="barraSearch"class="form-control form-control-sm barraSearch" placeholder="Buscar registro" aria-controls="example1">
        </div> --}}
        <div class="container navegacion-barra container-navegacion-2">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar registro" aria-label="Search">
                    <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit">Buscar Alumno</button>
                </form>
            </div> 
        
        </div>

    </div>
</body>
</html>