<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(0);
?>

<?php

require_once '../codigo/src/conexion_db.php';
$id_docente = $_SESSION['datos_usuario']['docente_id'];
$consulta = "SELECT a.* FROM alumno a
INNER JOIN nivel n ON a.nivel_id = n.nivel_id
INNER JOIN asignatura asi ON n.nivel_id = asi.nivel_id
INNER JOIN docente d ON asi.asignatura_id = d.asignatura_id
WHERE d.docente_id = '$id_docente'
";
$res = mysqli_query($conexion, $consulta);


if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $alum_id = $_POST['alum_id'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];

    $id_asig = $_SESSION['datos_usuario']['asignatura_id'];
    
    foreach ($alum_id as $ai) {
        $sql = "SELECT * FROM falta_asistencia WHERE alum_id = '$ai' AND fecha = '$fecha'";
        $resultado = mysqli_query($conexion, $sql);
        $alumFalta = mysqli_num_rows($resultado);
        if($alumFalta <1){
            $query = "INSERT INTO falta_asistencia(asignatura_id,alum_id,fecha,descripcion) 
            VALUES ('$id_asig','$ai','$fecha','$descripcion')";
    
            $res = mysqli_query($conexion, $query);
            header('Location: P2.Registrar asistencia.php');
        }
        else{
            $sql = "SELECT apellidos , nombres FROM alumno WHERE alum_id = '$ai' ";
            $resultado = mysqli_query($conexion, $sql);
            $alumno = mysqli_fetch_array($resultado);
            $alumnoApellidos = $alumno['apellidos'];
            $alumnoNombres = $alumno['nombres'];  
            header("Location: P2.Registrar asistencia.php?apellidos='$alumnoApellidos'");
        }
    }
}

?>

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>I.E. ALAN TURING</title>
        <link rel="shortcut icon" href="..\Imagenes\logo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">
        <!-- <link href="../codigo/Modulo_Docente_Frontend/3. Asistencia/P2.Registrar asistencia.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="assets/css/sidebar.css">
        <link rel="stylesheet" href="assets/css/registrar_asistencia.css">
        <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    </head>
    <body>

        <?php require_once 'includes/sidebar_docente.php'; ?>


        <div class="container m-6 p-5">
            <div class="row p3 mb-2">
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="container ml-4">
                                <div>
                                    <h1 class="titulo">Registro de Asistencia: <?php echo $_SESSION['datos_usuario']['especialidad'] ?></h1>
                                    <h3  class="texto-mostaza"><img src="https://img.icons8.com/color/48/000000/check-all--v1.png" /><?php echo $_SESSION['datos_usuario']['especialidad'] ?></h3>
                                </div>
                            </div>
                            <div class="container ml-4 mt-4">
                                <form method="POST" action="../../ProyectoSQA-G3/codigo/P2.Registrar asistencia.php">
                                    <div class=" mt-3 mb-4">
                                        <div class="form-control p-5">
                                            <p class="texto-azul">Alumno: </p>
                                            <select name="alum_id[]" multiple="multiple" style="width: 100%;" class="alumno" required>
                                                <?php while ($alum_id = mysqli_fetch_assoc($res)) : ?>
                                                    <option value=" <?php echo $alum_id['alum_id']; ?> "> <?php echo $alum_id['nombres'] . " " . $alum_id['apellidos']; ?> </option>
                                                <?php endwhile; ?>
                                            </select><br><br>
                                            <p class="texto-azul">Fecha: </p>
                                            <input name="fecha" type="date" class="form-control" placeholder="dd/mm/aaaa" pattern="[0-31]{1}/[0-12]{1}/[2021-3000]{1}" required /><br>
                                            <p class="texto-azul">Motivo: </p>
                                            <select name="descripcion" id="descripcion" style="width: 100%;">
                                                <option value="">Seleccione</option>
                                                <option value="Inasistencia">Inasistencia</option>
                                                <option value="Tardanza">Tardanza</option>
                                                <option value="Asistencia">Asistencia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <center>
                                        <div class="container mt-5">
                                            <button type="submit" class="boton"><i class='bx bx-save'></i>GRABAR</button>
                                            <button type="reset" class="boton"><i class="bx bxs-eraser" class="color-boton"></i>BORRAR</button>
                                        </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js?v=<?php echo time(); ?>"></script>
        <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js?v=<?php echo time(); ?>"></script>
        <script>

            $(function(){
                $('select').multipleSelect()
            });
        </script>
        <script src="../codigo/assets/js/sidebar.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
        <script src="assets/js/registerAsistenciaLogic.js?v=<?php echo time(); ?>"></script>

    </body>
<html>
