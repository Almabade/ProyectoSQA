

<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Registrar Observaciones</title>
        <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- <link href="assets/css/asistenciap2.css" rel="stylesheet">  -->
        <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">
        <link rel="stylesheet" href="assets/css/sidebar.css">
        <link rel="stylesheet" href="assets/css/observaciones-registrar.css">
    </head>


    <hr>
    
<body>
<?php
        include('src/8.1.Registrar_observacion.php');
    ?>   
    <?php require_once('includes/sidebar_docente.php') ?> 
    <?php


        $curso=($_GET['cursito']);

        $nombre=($_GET['nom']);

        $niv = ($_GET['niv'])

    ?>
    <div class="container m-6 p-5">
                <div class="row p3 mb-2">
                    <div class="col-lg-12">
                        <div class="main-box no-header clearfix">
                            <div class="main-box-body clearfix">
                                <div class="container ml-4">
                                    <div>
                                        <h1 class="texto-azul">Registrar Observaciones:</h1>
                                        <h2 class="texto-azul">ID: <?php echo $curso ?> </h2>
                                        <h3 class="texto-mostaza"><img src="https://img.icons8.com/color/48/000000/check-all--v1.png"/><?php echo $nombre ?></h3>
                                    </div>
                                </div>
                                <div class="container ml-4 mt-4">
                                    <form action="guarda_observaciones.php?curso=<?php echo $curso?>" method= "POST">
                                        <div class="mt-3 mb-4">
                                                <div class="form-control p-5">
                                                    <p class="texto-azul">Alumno:</p>
                                                    <select class="form-select" name="alumnos" style="width: 100%;"  class="alumno" required>
                                                        <?php
                                                        include("src/conexion_db.php");
                                                        $nivel_asignatura = $niv;
                                                        $consulta = "SELECT * FROM alumno WHERE nivel_id = $nivel_asignatura";
                                                        $resultado = mysqli_query($conexion, $consulta);
                                                        while($alumno = mysqli_fetch_array($resultado)){                     
                                                        ?>
                                                        <option value= <?php echo  $alumno['alum_id']?>><?php echo  $alumno['nombres']?>&nbsp<?php echo  $alumno['apellidos']?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select><br>
                                                    <p class="texto-azul">Fecha:</p>
                                                    <input type="date" class="form-control" name="fecha_observacion" placeholder="dd/mm/aaaa" pattern="[0-31]{1}/[0-12]{1}/[2021-3000]{1}"  required/>
                                                    <div class="form-group">
                                                        <br><label class="texto-azul">Observación:</label></br>
                                                        <textarea class="form-control" name="observaciones"  style="height: 120px;"></textarea>
                                                    </div>  
                                                                                                        
                                                </div>
                                        </div>
                                        <center>
                                            <div class="container mt-5">
                                                <button class="boton" type="submit"><i class='bx bxs-eraser' ></i>REGISTRAR</button>
                                                <button class="boton" type="reset"><i class='bx bxs-eraser' ></i>BORRAR</button>
                                            </div>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
                

            </div>
            <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
            <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="assets/js/sidebar.js"></script>
</body>