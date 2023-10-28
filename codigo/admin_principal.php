<!-- Este ARCHIVO SI SE USA -->

<?php include_once 'includes/header.php' ?>
<main>

        <?php
            session_start();

            if(!isset($_SESSION['datos_usuario']) || !$_SESSION['role']=='admin') {
                header("Location: login.php");
            }
        
        ?>

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
                            <div class="d-flex justify-content-center align-items-center"> 
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
                    
                            <a href="src/cerrar_sesion.php" class="mb-0 ms-2 text-secondary fw-bold">Cerrar Sesión</a>
                        </div>
                        <div id="volver" class="d-flex align-items-center mb-5 pointer d-none">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#8692A6"/>
                            </svg>
                    
                            <!-- <p class="mb-0 ms-2 text-secondary">Volver</p> -->
                        </div>
                        <div class="d-flex flex-column justify-content-end mb-5 me-lg-5">
                            <p style="font-size: 16px; color: white;" class="mb-0 me-lg-5">Cuenta Administrativa</p>
                            <p class="text-secondary mb-0 text-end me-lg-5 fw-bold" id="titlePhase">Menu Principal</p>
                        </div>
                    </div>
                    
                    <div class="container mx-lg-5" id="containerLoginPageRight">
                        <div>
                            <h5 class="fs-4" id="titleLoginPage" style="color: white">¡Bienvenido, Administrador!</h5>
                            <p class="text-secondary" id="textLoginPage">Hola, <?php echo($_SESSION['datos_usuario']['nombres'].' '.$_SESSION['datos_usuario']['apellidos'])?> seleccione el tipo de usuario que quiere crear.</p>
                        </div>
                        
                        <div class="row mx-auto" id="containerBtnRoles">
                            <a href="registro_tipo_usuario.php">
                                <div href="#" id="btnCrearUsuario" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded-pill border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                <div class="p-3 pb-2 ms-2">
                                    <i class="fs-5 text-white"><img src="assets/img/opcion-admin.png" width=35vw></i>
                                </div>
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div>
                                            <p class="fw-bold mb-0" style="color: #001E66">CREAR USUARIO</p>
                                            <p class="text-secondary fs-6">Crear un nuevo usuario</p>
                                        </div>
                                        <div class="pe-3 d-none arrow">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="busquedaEliminarUsuario.php">
                                <div href="#" id="btnEliminarUsuario" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded-pill border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                    <div class="p-3 pb-2 ms-2">
                                        <i class="fs-5 text-white"><img src="assets/img/opcion-admin.png" width=35vw></i>
                                    </div>
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div>
                                            <p class="fw-bold mb-0" style="color: #001E66">ELIMINAR USUARIO</p>
                                            <p class="text-secondary fs-6">Eliminar un usuario existente</p>
                                        </div>
                                        <div class="pe-3 d-none arrow">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                            </svg>
                                        </div> 
                                    </div>
                                </div>
                            </a>
                        </div>
                        <form method="POST" class="d-none formulario">
                            <div class="mb-1">
                                <p class="label-color mb-1">Nombres*</p>
                                <input type="text" class="form-control" placeholder="Nombres" />
                            </div>
                            <div class="mb-1">
                                <p class="label-color mb-1">Apellidos*</p>
                                <input type="text" class="form-control" placeholder="Apellidos" />
                            </div>
                            <div class="mb-1">
                                <p class="label-color mb-1">DNI*</p>
                                <input type="text" class="form-control" placeholder="DNI" />
                            </div>
                            <div class="mb-1">
                                <p class="label-color mb-1">Tipo de usuario*</p>
                                <select class="form-select select text-secondary">
                                    <option>Seleccione</option>
                                    <option>Alumno</option>
                                    <option>Docente</option>
                                </select>
                            </div>

                            <div class="mt-5">
                                <button class="btn btn-colors d-block w-100">SIGUIENTE</button>
                                <input type="submit" class="btn btn-colors d-block w-100 d-none" value="REGISTRAR" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/adminLogic.js?v=<?php echo time(); ?>"></script>
<?php include 'includes/footer.php' ?>