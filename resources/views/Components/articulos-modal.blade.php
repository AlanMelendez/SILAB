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
    <div class="modal fade" id="modal-articulos" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-articulos" aria-hidden="true">
        <div class="modal-dialog modal-center" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-articulos">Agregar Articulo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <form>
                    <div class="form-row">
                      <div class="col">
                        <label for="inputAddress">Código articulo</label>
                        <input type="text" class="form-control" placeholder="Codigo ">
                      </div>
                      <div class="col">
                        <label for="inputAddress">Nombre</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Marca</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Descripción</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="">
                    </div>
                  
                  
                  <form class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Laboratorio</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option selected>Laboratorio </option>
                      <option value="1">Industrial</option>
                      <option value="2">Química</option>
                      <option value="3">Electromecánica</option>
                      <option value="3">Física</option>
                    </select>
                  </form>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-accion2" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-accion1">Agregar</button>
            </div>
          </div>
        </div>
      </div>
</body>
</html>