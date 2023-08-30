const form = document.querySelector('.formulario');
const urlParams = new URLSearchParams(window.location.search);
document.addEventListener('DOMContentLoaded', () => {
    if (urlParams.get('mensaje') == '1') {
        showGod('Las notas fueron actualizadas exitosamente');
    }
})



const showGod = (error) => {
    swal.fire({
        text: error,
        icon: 'success',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#48BB78'
    })
}