<?php  
   include_once("src/conexion_db.php");
    $id = ($_GET['idobs']);
    $sql= "UPDATE observación SET estado= '1' WHERE obs_id='$id'";
    $res = mysqli_query($conexion, $sql) or trigger_error("Query failed - SQL ERROR: " .mysqli_error($conexion), E_USER_ERROR);
    mysqli_close($conexion);
    header("Location: observaciones_padre.php");

?>