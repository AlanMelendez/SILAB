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
            <div class="flex-item">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                    value="Alan Cuevas Melendez" readonly>
            </div>
            <div class="flex-item">
                <label for="ncontrol" class="form-label">No. Control</label>
                <input type="number" class="form-control" id="ncontrol" value="192310781" readonly>
            </div>
            <div class="flex-item">
                <label for="carrera" class="form-label">Carrera</label>
                <input type="text" class="form-control" id="carrera" value="Ing. Informatica" readonly>
            </div>
            <div class="flex-item">
                <label for="semestre" class="form-label">Semestre</label>
                <input type="text" class="form-control" id="semestre" value="Semestre 6" readonly>
            </div>


            <div class="flex-item" role="group">
                <div class="container-select">
                    <label for="tramite" class="form-label">Tipo de tramite</label>
                    <select id="disabledSelect" class="form-select">
                        <option>Carta no adeudo (Regular)</option>
                        <option>Carta no adeudo (Egresados)</option>
                        <option>Carta no adeudo (Baja temporal)</option>
                        <option>Carta no adeudo (Baja definitiva)</option>
                    </select>
                    <button type="button" onclick="iniciarTramite();" class="btn btn-primary btn-tramite toastrDefaultSuccess">Iniciar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
