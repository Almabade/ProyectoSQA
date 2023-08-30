<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Observaciones</title>
  <link rel="shortcut icon" href="..\Imagenes\logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/observaciones.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    
    <style type="text/css">
        .btn {
            display       : inline-block;
            font-size     : 1rem;
            padding       : .0.5rem;
        }
        .btn:hover {
            cursor: pointer;
        }
        .custom-btn {
            font-family : monospace;
            margin      : 0.5rem;
            padding-top : .0.5rem;
        }
        .vertical {
            transform: rotate(-90deg);
        }
    </style>
</head>
  <body>
    <?php require_once('src/info_perfil_docente.php') ?>
    <?php require_once('includes/sidebar_docente.php') ?>

    <div class="container mt-5 ml-5 p-5">
      <div class="container-fluid p-0">
      <h1 class="h3">Observaciones de Salones a cargo</h1>
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="card-actions float-right">
                
              </div>
              <h4 class="subtext">Profesor :</h4>
            </div>
            <div class="card-body">
              <table class="table table-striped" style="width:100%" style="height:100;">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Curso</th>
                    <th>Grado</th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      include("src/conexion_db.php");
                      $id_asignatura = $_SESSION['datos_usuario']['asignatura_id'];
                      $consulta = "SELECT * FROM asignatura WHERE asignatura_id = $id_asignatura ";
                      $resultado = mysqli_query($conexion, $consulta);
                      while($curso = mysqli_fetch_array($resultado)){                     
                    ?>

                  <tr id="lol">

                    <td><?php echo  $curso['asignatura_id']?></td>
                    <td><?php echo  $curso['nombre']?></td>
                    <td><?php echo  $curso['nivel_id']?></td>
                    <?php
                    $cursito = $curso['asignatura_id'];
                    $nom = $curso['nombre'];
                    $niv = $curso['nivel_id'];
                    ?>
                    <td><button onclick="location.href= 'registro_observacionesp.php?cursito=<?php echo $cursito ?>&nom=<?php echo $nom?>&niv=<?php echo $niv?>'" type="button" class="btn btn-primary"  >Ver</button><td>


                  </tr>
                  <?php
                    }
                    ?>
                  
                </tbody>
              </table>
            </div>
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
