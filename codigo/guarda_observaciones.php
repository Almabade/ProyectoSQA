
<?php  
   include("src/conexion_db.php");
   $fec = $_POST["fecha_observacion"]; 
   $obs = $_POST["observaciones"]; 
    $alum=$_POST["alumnos"];
    $curso = ($_GET['curso']);
    $id = uniqid('', true);
    $sql= "INSERT INTO observación (id_alum, id_asig, descripción, fecha_observacion, estado) VALUES ('$alum','$curso','$obs', '$fec', '0')";
    $res = mysqli_query($conexion, $sql) or trigger_error("Query failed - SQL ERROR: " .mysqli_error($conexion), E_USER_ERROR);
    mysqli_close($conexion);
    header("Location: observaciones.php");

?>