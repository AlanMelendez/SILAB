
function iniciarTramite(){
    //Documentacion https://sweetalert2.github.io/#usage
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: '¡Tramite registrado con exito!',
        text: 'Haz click sobre el siguiente boton para visualizar el estado de tu tramite.',
        footer:' <a href="consultarAdeudo">Consulta(s).</a>',
        showConfirmButton: false,
        timer: 15000,
        showCloseButton: true,
      })
    //   Swal.fire({
    //     icon: 'error',
    //     title: 'Oops...',
    //     text: 'Something went wrong!',
    //     footer: '<a href="">Why do I have this issue?</a>'
    //   })
}

// Funciones ventana modal prestamos
function ventanaModal(){
    $("staticBackdrop").modal("show");
}
function ventanaModal2(){
    $(".bd-example-modal-xl").modal("show");
}
function ventanaModal3(){
    
}
