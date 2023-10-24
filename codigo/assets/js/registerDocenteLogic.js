const btnRegistrar = document.getElementById('btnRegistrar');
const urlParams = new URLSearchParams(window.location.search);
const nombres = document.getElementById('nombres');
const apellidos = document.getElementById('apellidos');
const celular = document.getElementById('celular');
const email = document.getElementById('email');
const dni = document.getElementById('dni');
const especialidad = document.getElementById('especialidad');
const form = document.querySelector('.formulario');
document.addEventListener('DOMContentLoaded', () => {

    if (urlParams.get('error') == '1') {
        showError('Esta asignatura ya se encuentra asignada a otro profesor');
    }

    if (urlParams.get('error') == '2') {
        showError('Ya existe en el sistema un usuario con este DNI');
    }

    if (urlParams.get('mensaje') == '1') {
        showGod('El usuario fue creado exitosamente');
    }

    btnRegistrar.addEventListener('click', validateForm);
})



const showError = (error) => {
    swal.fire({
        text: error,
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#48BB78'
    })
}

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
    const nombresValue = nombres.value;
    const apellidosValue = apellidos.value;
    const celularValue = celular.value;
    const emailValue = email.value;
    const dniValue = dni.value;
    const especialidadValue = especialidad.value;
    

    if (nombresValue === '' || apellidosValue === '' || celularValue === '' || emailValue === '' || dniValue ==='' || especialidadValue === '' ) {
        swal.fire({
            title: 'Error',
            text: 'Debe completar todos los campos',
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
    if (celularValue.length !== 9 || !/^[0-9]+$/.test(celularValue) || celularValue.charAt(0) !== '9') {
        swal.fire({
            title: 'Error',
            text: 'El número de celular debe tener 9 cifras y comenzar con 9',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }
    if (!/^\d{8}$/.test(dniValue)) {
        swal.fire({
            title: 'Error',
            text: 'El DNI debe tener exactamente 8 cifras',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }
    if (!emailValue.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
        swal.fire({
            title: 'Error',
            text: 'El correo electrónico no tiene un formato válido',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }

    form.submit();
    form.reset();
}