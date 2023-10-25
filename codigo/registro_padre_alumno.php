<?php
    session_start();

    if(!isset($_SESSION['datos_usuario']) || !$_SESSION['role']=='admin') {
        header("Location: login.php");
    }
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta Padre</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?v=<?php echo time(); ?>"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

    <div class="row">
        <div class="col-md-5 p-5 fst-quote-container text-white min-h-100vh">

            <div class="container">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <img src="assets/img/admin_prueba.png" alt="admin-foto" />
                        <div class="text-white ms-3">
                            <p style="color: #D2AF39" class="fw-bold fst-italic mb-0">Administrador</p>
                            <p class="mb-0"> <?php echo($_SESSION['datos_usuario']['nombres'].' '.$_SESSION['datos_usuario']['apellidos'])?> </p>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/Logo.png" width=50vw>
                            <h2 class="fw-lighter ms-3 fw-bold mb-0 text-dark">I.E. ALAN TURING</h2>    
                        </div>
                        <div>
                            <p class="pt-4 lh-lg mb-0">
                                El colegio Alan Turing se destaca en Lima por su enfoque educativo altamente personalizado y orientado al estudiante. Nuestra principal meta es moldear individuos integrales, comprometidos, con un fuerte sentido de responsabilidad, empatía y autoconfianza. Fomentamos una pasión inquebrantable por el aprendizaje y promovemos la participación activa de nuestros estudiantes en la comunidad global.
                            </p>
                        </div>
                        <div class="text-center mt-5">
                            <p style="color: #D2AF39; font-size: 20px">¿Ayuda?</p>
                            <button class="btn-contactanos" class="btn btn-light w-100 mx-auto py-3">CONTÁCTANOS</button>
                        </div>
                    </div>
                </div>
                
            </div>            
        </div>
        
        <div class="col-md-7 min-h-100vh d-flex align-items-center">
            <div class="container py-5">
                <div class="d-flex justify-content-between align-self-start align-items-center ">
                    <div id="cerrarSesion" class="d-flex align-items-center mb-5 pointer">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#001E66"/>
                        </svg>
                
                        <a href="registro_tipo_usuario.php" class="fw-bold mb-0 ms-2 text-secondary">Volver</a>
                    </div>
                    <div id="volver" class="d-flex align-items-center mb-5 pointer d-none">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#8692A6"/>
                        </svg>
                
                        <p class="mb-0 ms-2 text-secondary">Volver</p>
                    </div>
                    <div class="d-flex flex-column justify-content-end mb-5 me-lg-5">
                            <p style="font-size: 16px; color: white;" class="mb-0 me-lg-5">Cuenta Administrativa</p>
                            <p class="text-secondary mb-0 text-end me-lg-5 fw-bold" id="titlePhase">Menu Principal</p>
                    </div>
                </div>
                
                <div class="container ml-4" id="containerLoginPageRight">
                    <div>
                        <h5 class="fw-bold fs-4" id="titleLoginPage">Registro Padre</h5>
                    </div>
                </div>
                <div class="container ml-4 mt-2" id="containerLoginPageRight">
           
                    <form action="src/registrar_padre_alumno_logic.php" method="POST" class="formulario" >
                        <div class="mb-1">
                            <p class="label-color mb-1">Nombres*</p>
                            <input type="text" class="form-control" placeholder="Nombres del Padre" name="nombresPadre" id="nombresPadre" required />
                        </div>
                        <div class="mb-1">
                            <p class="label-color mb-1">Apellidos*</p>
                            <input type="text" class="form-control" placeholder="Apellidos del Padre" name="apellidosPadre" id="apellidosPadre" required/>
                        </div>
                        <div class="mb-1">
                         <!-- Agregar condicional para que el dni tenga 8 digitos -->
                            <p class="label-color mb-1">DNI*</p>
                            <input type="text" class="form-control" placeholder="N° DNI del Padre"  name = "dniPadre" id="dniPadre"/>
                        </div>
                        <div class="mb-1">
                         <!-- Agregar condicional, para que el celulartenga 9 digitos -->
                            <p class="label-color mb-1">Celular*</p>
                            <div class="input-group">
                                <div class="input-group-prepend" style="height: 80px;">
                                  <span class="input-group-text" style="height: 80%;"><img src="assets/img/peru.png" alt="" style="height: 20px; width: 30px; margin-right: 4px;"/>+51</span>
                                </div>
                                <input type="tel" class="form-control" placeholder="987654321"   pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" name="celularPadre" id="celularPadre" required />
                            </div>
                        </div>
                        <div class="mb-1">
                            <!-- Agregar condicional para que el correo tenga @ -->
                            <p class="label-color mb-1">Correo electrónico*</p>
                            <input type="email" class="form-control" placeholder="Correo Electrónico del Padre" name="emailPadre" id="emailPadre" required/>
                            <span id="emailError" style="color: red;"></span>
                        </div>

                        <!-- <script>
                            document.getElementById('emailPadre').addEventListener('input', function() {
                                var emailInput = this.value;
                                var emailError = document.getElementById('emailError');

                                if (emailInput.indexOf('@') === -1) {
                                    emailError.textContent = 'El correo debe contener al menos un "@"';
                                } else {
                                    emailError.textContent = '';
                                }
                            });
                        </script> -->

                        <br>
                        <h5 class="fw-bold fs-4" id="titleLoginPage">Registro Alumno</h5>
                        <div class="mb-1">
                            <p class="label-color mb-1">Nombres*</p>
                            <input type="text" class="form-control" placeholder="Nombres del Alumno" name="nombresAlumno" id="nombresAlumno" required />
                        </div>
                        <div class="mb-1">
                            <p class="label-color mb-1">Apellidos*</p>
                            <input type="text" class="form-control" placeholder="Apellidos del Alumno" name="apellidosAlumno" id="apellidosAlumno" required />
                        </div>
                        <div class="mb-1">
                        <!-- Agregar condicional para que el dni tenga 8 digitos -->
                            <p class="label-color mb-1">DNI*</p>
                            <input type="text" class="form-control" placeholder="N° DNI del Alumno" name="dniAlumno" id="dniAlumno" pattern="[0-9]{8}" required />
                        </div>
                        <div class="mb-1">
                            <p class="label-color mb-1">Grado*</p>
                            <select style="border-color: #001E66" class="form-select" aria-label="Default select example" name="gradoAlumno" id="gradoAlumno">
                                <option selected>Seleccione</option>
                                <option value="1">1ero de Secundaria</option>
                                <option value="2">2do de Secundaria</option>
                            </select>
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-colors d-block w-100" type="submit" id="btnRegistrar">SIGUIENTE</button>
                        </div>
                    </form>
                </div>
                  
            </div>
        </div>
    </div>
    <script src="assets/js/registerPadreAlumno.js?v=<?php echo time(); ?>"></script>
    <!--Fotter-->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- FontAwesome para iconos -->
    <script src="https://kit.fontawesome.com/57888ec9eb.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
    
</body>

</html>