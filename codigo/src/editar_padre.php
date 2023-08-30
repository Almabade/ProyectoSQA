<?php
    require_once('conexion_db.php');

    session_start();
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $contrasenia = $_POST['contrasenia'];

    if($contrasenia == ''){
        $contrasenia = $_SESSION['datos_usuario']['contrasenia'];
    }

    $sql = "UPDATE `padre` SET `celular` = '$celular', email = '$email', contrasenia = '$contrasenia' WHERE padre_id = ".$_SESSION['datos_usuario']['padre_id']; 
    mysqli_query($conexion, $sql);
    $_SESSION['datos_usuario']['celular'] = $celular;
    $_SESSION['datos_usuario']['email'] = $email;
    $_SESSION['datos_usuario']['contrasenia'] = $contrasenia;

    header("location: ../index.php");
?>