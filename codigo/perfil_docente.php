<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I.E. ALAN TURING</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/perfil.css" rel="stylesheet">
</head>

<body>
    <?php require_once('src/info_perfil_docente.php') ?>
    <?php require_once('includes/sidebar_docente.php') ?>
    <div class="capa-base">
        <div class="contenedor">
            <div class="main-body">
                <button class="btn1"><i class='bx bxs-user-pin'></i></button>
                <button class="btn1"><i class='bx bxs-wrench'></i> </button>
                <div class="perfil">
                    <img src="assets/img/logo-usuario.png" alt="" id="perfil">
                    <div class="texto">
                        <h2> <?php echo $_SESSION['datos_usuario']['nombres'] . ' ' . $_SESSION['datos_usuario']['apellidos'] ?> </h2>
                        <h3> <?php echo $_SESSION['datos_usuario']['email'] ?> </h3>
                    </div>
                    <!-- <a href="perfil_docente.php" class="btn d-flex align-items-center"><i class='bx bxs-user-pin'></i> General </a> -->
                    <!-- <a href="editar_perfil_padre.php" class="btn d-flex align-items-center">
                        <img src="assets/img/Logo-editar.png" class="btn-editar">Editar
                    </a> -->
                    <!-- EL BOTÓN EDITAR SE QUITARÁ -->
                </div>
            </div>
        </div>
        <div class="datosper">
            <div class="row">
                <div class="bio-desk">
                    <div class="panel">
                        <h4 class="terques">Información Personal</h4>
                        
                        <ul>
                            <li>Nombre Completo: <?php echo $_SESSION['datos_usuario']['nombres'] . ' ' . $_SESSION['datos_usuario']['apellidos'] ?></li>
                            <li>Teléfono: <?php echo $_SESSION['datos_usuario']['celular'] ?></li>
                            <li>Correo electronico: <?php echo $_SESSION['datos_usuario']['email'] ?></li>
                            <li>Tipo de Usuario: Docente</li>
                        </ul>

                        <!-- <p>Nombre Completo: <?php echo $_SESSION['datos_usuario']['nombres'] . ' ' . $_SESSION['datos_usuario']['apellidos'] ?> </p>
                        <p>Teléfono: <?php echo $_SESSION['datos_usuario']['celular'] ?> </p>
                        <p>Correo electronico: <?php echo $_SESSION['datos_usuario']['email'] ?> </p>
                        <p>Tipo de Usuario: Docente</p> -->
                    </div>
                </div>
                <div class="bio-desk">
                    <div class="panel">
                        <h4 class="terques">Datos Academicos </h4>

                        <ul>
                            <li>Usuario Academico: <?php echo $_SESSION['datos_usuario']['usuario']  ?></li>
                            <li>Código: <?php echo $_SESSION['datos_usuario']['docente_id'] ?></li>
                            <li>Correo Institucional: <?php echo $_SESSION['datos_usuario']['email'] ?></li>
                            <li>Especialidad: <?php echo $_SESSION['datos_usuario']['especialidad'] ?></li>
                        </ul>

                        <!-- <p>Usuario Academico: <?php echo $_SESSION['datos_usuario']['usuario']  ?>  </p>
                        <p>Código: <?php echo $_SESSION['datos_usuario']['docente_id'] ?> </p>
                        <p>Correo Institucional: <?php echo $_SESSION['datos_usuario']['email'] ?> </p>
                        <p>Especialidad: <?php echo $_SESSION['datos_usuario']['especialidad'] ?> </p> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="assets/js/sidebar.js"></script>

</body>