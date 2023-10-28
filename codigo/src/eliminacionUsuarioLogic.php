<!-- ESTE ARCHIVO SI SE USA -->
<?php
    include('conexion_db.php');
    $dni = $_POST['dni'];
    $tipoUsuario = $_POST['tipoUsuario'];


    if($tipoUsuario === "Padre"){
        $sql = "SELECT `alum_id` FROM `padre` WHERE `padre`.`padre_id` = '$dni'";
        $result = mysqli_query($conexion, $sql);
        $alumno = mysqli_fetch_array($result);

        $alum_id = $alumno['alum_id'];


        //eliminamos primero el padre y luego el alumno
        
        $sql = "DELETE FROM `nota` WHERE `nota`.`alum_id` = '$alum_id';";
        mysqli_query($conexion, $sql);

        $sql = "DELETE FROM `padre` WHERE `padre`.`padre_id` = '$dni';";
        mysqli_query($conexion, $sql);

        $sql = "DELETE FROM `alumno` WHERE `alumno`.`alum_id` = '$alum_id';";
        mysqli_query($conexion, $sql);

        header("location: ../busquedaEliminarUsuario.php?mensaje=1");
    }
    if($tipoUsuario === "Docente"){
        $sql = "SELECT `asignatura_id` FROM `docente` WHERE `docente`.`docente_id` = '$dni'; ";
        $result = mysqli_query($conexion, $sql);
        $asignatura = mysqli_fetch_array($result);

        $asignatura_id = $asignatura['asignatura_id'];

        //eliminamos primero la asignatura y luego al docente

        $sql = "DELETE FROM `observación` WHERE `id_asig` = '$asignatura_id'";
        mysqli_query($conexion, $sql);
        $sql = "DELETE FROM `nota` WHERE `asignatura_id` = '$asignatura_id'";
        mysqli_query($conexion, $sql);
        $sql = "DELETE FROM `falta_asistencia` WHERE `asignatura_id` = '$asignatura_id'";
        mysqli_query($conexion, $sql);
        $sql = "DELETE FROM `docente` WHERE `docente`.`docente_id` = '$dni';";
        mysqli_query($conexion, $sql);

        header("location: ../busquedaEliminarUsuario.php?mensaje=1");
    }
?>