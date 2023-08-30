<?php
    include("conexion_db.php");

    /*almacenando id del usuario padre*/
    $id_padre = $_SESSION['datos_usuario']['padre_id'];
    
    /*Para mostrar los datos del alumno*/
    $consulta = "SELECT * FROM alumno WHERE alum_id IN (SELECT alum_id FROM padre WHERE padre_id = ".$id_padre.")";
    $resultado_alumno = mysqli_query($conexion, $consulta);
    $alumno = mysqli_fetch_array($resultado_alumno);
    $alumno_nombre = $alumno['nombres'];
    $alumno_apellido = $alumno['apellidos'];
    $alumno_id = $alumno['alum_id'];

  
   
    /*Seleccionar las notas del alumno*/
    $consulta = "SELECT * FROM nota WHERE alum_id IN (SELECT alum_id FROM padre WHERE padre_id = ".$id_padre.")";
    $resultado_nota = mysqli_query($conexion, $consulta);
    $nota = mysqli_fetch_array($resultado_nota);

    $asignaturas = [1,2,3,4,5];
    $nombres = ['matematica','Comunicacion', 'Ingles', 'Ciencia,Tecnologia y Ambiente','Educacion Fisica'];

    
?>