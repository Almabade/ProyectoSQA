const form = document.querySelector('.formulario');
const urlParams = new URLSearchParams(window.location.search);
const apellidos = urlParams.get('apellidos');
let apellidos2 = apellidos.toUpperCase();
apellidos2 = apellidos2.replace(/'/gi,"");


let cadena = "El alumno  "+apellidos2+"  ya cuenta con una falta o tardanza en esta fecha";
document.addEventListener('DOMContentLoaded', () => {
    if (urlParams.get('mensaje') != apellidos) {
        showGod(cadena);
    }
})

const showGod = (error) => {
    swal.fire({
        text: error,
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#48BB78'
    })
}