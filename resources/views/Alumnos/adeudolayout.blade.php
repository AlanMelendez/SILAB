<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../resources/css/tramite.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <div class="container titulo">
      <h2 class="titulo-head">INICIAR TRAMITE</h2>
    </div>
    <div class="container form-tramite">
      <form>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" value="Alan Cuevas Melendez" readonly>
        </div>
        <div class="mb-3">
          <label for="ncontrol" class="form-label">No. Control</label>
          <input type="number" class="form-control" id="ncontrol" value="192310781" readonly>
        </div>
        <div class="mb-3">
          <label for="carrera" class="form-label">Carrera</label>
          <input type="text" class="form-control" id="carrera" value="Ing. Informatica" readonly>
        </div>
        <div class="mb-3">
          <label for="semestre" class="form-label">Semestre</label>
          <input type="text" class="form-control" id="semestre" value="Semestre 6" readonly>
        </div>
        
        
        <div class="mb-3" role="group">
          <label for="tramite" class="form-label">Tipo de tramite</label>
          <select id="disabledSelect" class="form-select">
            <option>Carta no adeudo (Regular)</option>
            <option>Carta no adeudo (Egresados)</option>
            <option>Carta no adeudo (Baja temporal)</option>
            <option>Carta no adeudo (Baja definitiva)</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar</button>
      </form>
      </div>
      
</body>
</html>