{{-- 
    Para usar la modal es necesario agregarle los atributos siguientes al boton que la activara:
        data-toggle="modal" data-target="#staticBackdrop"
    No olvidarnos de crear una funcion con javascript que nos ayude a activarla:
        public/js/modal

    Para agreagar contenido buscar: cargar contenido dinamico en un modal bootsrap
    --}}
  <!-- Modal -->
  <div class="modal fade bd-example-modal-l modal-estatica" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog bd-example-modal-l" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Nuevo prestamo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="imagen-alumno">
            <img src="img/perfil-ejemplo.png" class="perfil-imagen"alt="">
          </div>
          <div class="form-alumno">
            <form>
              
              <div class="collapse-form" id="demo">
                <label for="ncontrol" class="form-label">No. Control</label>
                <input type="number" class="form-control" id="ncontrol" value="192310781">
              </div>
              <div class="collapse-form" id="demo">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" value="Alan Cuevas Melendez" readonly>
              </div>
              <div class="collapse-form" id="demo">
                <label for="carrera" class="form-label">Carrera</label>
                <input type="text" class="form-control" id="carrera" value="Ing. Informatica" readonly>
              </div>
              <div class="collapse-form" id="demo">
                <label for="carrera" class="form-label">Laboratorio</label>
                <input type="text" class="form-control" id="laboratorio" value="Computo" readonly>
              </div>
              <div class="tabla-articulos" id="demo">
                <label for="carrera" class="form-label">Articulos</label>
                <input type="number" class="articulos-label form-control" id="carrera" >
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nombre Articulo</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Numero serie</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
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
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              {{-- <div class="mb-3">
                <label for="semestre" class="form-label">Semestre</label>
                <input type="text" class="form-control" id="semestre" value="Semestre 6" readonly>
              </div> --}}
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-cancelar" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-agregar">Agregar</button>
        </div>
      </div>
    </div>
  </div>