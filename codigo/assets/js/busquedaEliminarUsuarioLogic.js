const btnBuscar = document.getElementById('btnBuscar');
const urlParams = new URLSearchParams(window.location.search);
const dni = document.getElementById('dni');
const form = document.querySelector('.formulario');

document.addEventListener('DOMContentLoaded', () => {
    if (urlParams.get('mensaje') == '1') {
        showGod('El usuario fue eliminado exitosamente');
    }

    btnBuscar.addEventListener('click', validateForm);
})

const showGod = (error) => {
    swal.fire({
        text: error,
        icon: 'success',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#48BB78'
    })
}


const validateForm = (e) => {
    e.preventDefault();
    const dniValue = dni.value;
    

    if (dniValue ==='') {
        swal.fire({
            title: 'Error',
            text: 'Debe completar el campo',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }

    if (!dniValue.match(/^[0-9]+$/)) {
        swal.fire({
            title: 'Error',
            text: 'El ID debe ser un número',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }

    form.submit();
    form.reset();
}