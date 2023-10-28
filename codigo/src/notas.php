<?php
    include("conexion_db.php");
    
    $id = $_SESSION['datos_usuario']['docente_id'];
    $asignatura_id = $_SESSION['datos_usuario']['asignatura_id'];
    $asignatura = $_SESSION['datos_usuario']['especialidad'];
   

    /*para mostrar los datos de los alumnos*/
    $consulta = "SELECT * FROM alumno WHERE nivel_id IN (SELECT nivel_id FROM asignatura WHERE asignatura_id = ".$asignatura_id.")";
    $resultado_alumnos = mysqli_query($conexion, $consulta);
    $alumnos = mysqli_fetch_array($resultado_alumnos);

?>