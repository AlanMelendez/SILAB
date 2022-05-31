<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <div class="titulo-container container-tramite">
        <h2 class="titulo-head">INICIAR TRAMITE</h2>
    </div>
    <div class="container ">
        <form class="form-tramite">
            @foreach ($alumno as $alumno)
                <div class="flex-item">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" value="{{ $alumno->id }}" readonly>
                </div>
                <div class="flex-item">
                    <label for="ncontrol" class="form-label">No. Control</label>
                    <input type="number" class="form-control" id="ncontrol" value="{{ $alumno->numero_control }}" readonly>
                </div>
                {{-- <div class="flex-item">
                    <label for="carrera" class="form-label">Carrera</label>
                    <input type="text" class="form-control" id="carrera" value="Ing. Informatica" readonly>
                </div> --}}
                <div class="flex-item">
                    <label for="semestre" class="form-label">Semestre</label>
                    <input type="text" class="form-control" id="semestre" value="{{ $alumno->semestre }}" readonly>
                </div>


                <div class="flex-item" role="group">
                    <div class="container-select">
                        <label for="tramite" class="form-label">Tipo de tramite</label>
                        <select id="disabledSelect" class="form-select form-select-sm select-cartas">
                            <option size="5px" class="form-select" selected>Carta no adeudo (Regular)</option>
                            <option size="5px" class="form-select">Carta no adeudo (Egresados)</option>
                            <option size="5px" class="form-select">Carta no adeudo (Baja temporal)</option>
                            <option size="5px" class="form-select">Carta no adeudo (Baja definitiva)</option>
                        </select>
                        <button type="button" onclick="iniciarTramite();"
                            class="btn btn-primary btn-tramite toastrDefaultSuccess">Iniciar</button>
                    </div>
                </div>
            @endforeach
        </form>
    </div>
</body>

</html>
