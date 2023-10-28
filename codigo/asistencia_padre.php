
<!-- /* Este archivo si se está usando */ -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(0);
?>

<?php
  require_once ('../codigo/src/conexion_db.php');
  $alum_id= $_SESSION['datos_usuario']['alum_id'];
  $consulta = "SELECT nombre,fecha, descripcion FROM asignatura,falta_asistencia WHERE falta_asistencia.asignatura_id = asignatura.asignatura_id  AND  falta_asistencia.alum_id = $alum_id ";
  $res = mysqli_query($conexion, $consulta);
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>I.E. ALAN TURING</title>
  <link rel="shortcut icon" href="../codigo/assets/img/logo.png" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/sidebar.css">
  <link rel="stylesheet" href="assets/css/ver-asistencias.css">
  
</head>
  <body>
    <?php require_once('includes/sidebar_padre.php'); ?>
    <div class="container mt-4 ml-4 p-4">
        <div class="container-fluid p-0"><br>
        <h1 class="titulo">Asistencias del alumno</h1><br>
        <div class="row">
          <div class="col-xl-8">
            <div class="card">
              <div class="card-header pb-0">            
                <table class="table table-hover">
                  <thead class="text-center" >
                    <tr>
                      <th scope="col" class="titulo-colum">ASIGNATURA</th>
                      <th scope="col" class="titulo-colum">FECHA</th>
                      <th scope="col" class="titulo-colum">DESCRIPCIÓN</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while($mostrar = mysqli_fetch_array($res)){?>
                    <tr>
                      <td class="datos-asistencia"><?php echo $mostrar['nombre']?></td>
                      <td class="datos-asistencia"><?php echo $mostrar['fecha']?></td>
                      <td class="datos-asistencia"><?php echo $mostrar['descripcion']?></td>
                    </tr>
                  <?php 
                  }?>
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/sidebar.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>