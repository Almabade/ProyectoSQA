const btnRegistrar = document.getElementById('btnRegistrar');
const urlParams = new URLSearchParams(window.location.search);

const nombresPadre = document.getElementById('nombresPadre'); 
const apellidosPadre = document.getElementById('apellidosPadre');
const dniPadre = document.getElementById('dniPadre');
const celularPadre = document.getElementById('celularPadre');
const emailPadre = document.getElementById('emailPadre');
const nombresAlumno = document.getElementById('nombresAlumno');
const apellidosAlumno = document.getElementById('apellidosAlumno');
const dniAlumno = document.getElementById('dniAlumno');
const gradoAlumno = document.getElementById('gradoAlumno');

const form = document.querySelector('.formulario');
document.addEventListener('DOMContentLoaded', () => {

    if (urlParams.get('error') == '1') {
        showError('Ya existe un alumno registrado con ese DNI');
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
    const nombresPadreValue = nombresPadre.value;
    const apellidosPadreValue = apellidosPadre.value;
    const dniPadreValue = dniPadre.value;
    const celularPadreValue = celularPadre.value;
    const emailPadreValue = emailPadre.value;
    const nombresAlumnoValue = nombresAlumno.value;
    const apellidosAlumnoValue = apellidosAlumno.value;
    const dniAlumnoValue = dniAlumno.value;
    const gradoAlumnoValue = gradoAlumno.value;

    if (nombresPadreValue === '' || apellidosPadreValue === '' || dniPadreValue === '' || celularPadreValue === '' || emailPadreValue ==='' 
        || nombresAlumnoValue === ''|| apellidosAlumnoValue === '' || dniAlumnoValue === '' || gradoAlumnoValue === '') {
        swal.fire({
            title: 'Error',
            text: 'Debe completar todos los campos',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }

    if (!dniAlumnoValue.match(/^[0-9]+$/) || !dniPadreValue.match(/^[0-9]+$/)) {
        swal.fire({
            title: 'Error',
            text: 'El ID debe ser un número',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }

    if(dniPadreValue === dniAlumnoValue){
        swal.fire({
            title: 'Error',
            text: 'Los numero de DNI del padre y el alumno deben ser distintos',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
    
        return;
    }
    if (emailPadreValue.indexOf('@') === -1) {
        swal.fire({
            title: 'Error',
            text: 'El correo electrónico debe contener al menos un "@"',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }
    if (!emailPadreValue.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
        swal.fire({
            title: 'Error',
            text: 'El correo electrónico no tiene un formato válido',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }
    
    if (celularPadreValue.length !== 9 || !/^[0-9]+$/.test(celularPadreValue) || celularPadreValue.charAt(0) !== '9') {
        swal.fire({
            title: 'Error',
            text: 'El número de celular debe tener 9 cifras y comenzar con 9',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }

    if (!/^\d{8}$/.test(dniPadreValue) || !/^\d{8}$/.test(dniAlumnoValue)) {
        swal.fire({
            title: 'Error',
            text: 'El DNI debe tener exactamente 8 cifras',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }

    form.submit();
    form.reset();
}