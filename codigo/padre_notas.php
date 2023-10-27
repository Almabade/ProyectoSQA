<!-- /* Este archivo si se está usando */ -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I.E. ALAN TURING</title>
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/notas_padre.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <?php require_once('includes/sidebar_padre.php') ?>
    <?php
    include("src/vernotaspadre.php");
    include("src/conexion_db.php");
    ?>

    <div>
        <div class="container bootstrap snippets bootdey" style="padding-top: 100px; padding-bottom: 100px;">
            <div class="row" style="background: #FFFFFF; border-radius:20px;">
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <!-- <h1>Nombres del alumno: <?php echo $alumno_nombre ?></h1>
                                <h1>Apellidos del alumno: <?php echo $alumno_apellido ?></h1> -->
                                <h1>Nombres y apellidos del alumno: <?php echo $alumno_nombre ?> <?php echo $alumno_apellido ?></h1>
                                <table class="table user-list">
                                    <thead>
                                        <tr>
                                            <th class="text-center th-nota"><span>Curso</span></th>
                                            <th class="text-center th-nota"><span>NOTA 1</span></th>
                                            <th class="text-center th-nota"><span>NOTA 2</span></th>
                                            <th class="text-center th-nota"><span>NOTA 3</span></th>
                                            <th class="text-center th-nota"><span>PROMEDIO</span></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       $asignaturas = array(); // Arreglo para almacenar las asignaturas

                                       // Obtener la lista de asignaturas para el nivel
                                       $consulta_asignaturas = "SELECT * FROM asignatura WHERE nivel_id = '$nivel'";
                                       $resultado_asignaturas = mysqli_query($conexion, $consulta_asignaturas);
                                       
                                       if ($resultado_asignaturas) {
                                           while ($fila_asignatura = mysqli_fetch_array($resultado_asignaturas)) {
                                               $asignaturas[$fila_asignatura['asignatura_id']] = $fila_asignatura['nombre'];
                                           }
                                       }
                                       
                                       // Inicializar el arreglo de notas con valores predeterminados
                                       $notas = array();
                                       foreach ($asignaturas as $asignatura_id => $nombre_asignatura) {
                                           $notas[$asignatura_id] = array(
                                               'nota1' => '-',
                                               'nota2' => '-',
                                               'nota3' => '-',
                                               'promedio' => '-',
                                           );
                                       }
                                       
                                       // Obtener las notas del alumno
                                       $consulta_notas = "SELECT * FROM nota WHERE alum_id = $alumno_id";
                                       $resultado_notas = mysqli_query($conexion, $consulta_notas);
                                       
                                       if ($resultado_notas) {
                                           while ($fila_nota = mysqli_fetch_array($resultado_notas)) {
                                               $asignatura_id = $fila_nota['asignatura_id'];
                                               $trimestre = $fila_nota['trimestre'];
                                               $nota = $fila_nota['nota'];
                                       
                                               // Actualizar el arreglo de notas con las notas reales
                                               if (isset($notas[$asignatura_id])) {
                                                   if ($trimestre == 1) {
                                                       $notas[$asignatura_id]['nota1'] = $nota;
                                                   } elseif ($trimestre == 2) {
                                                       $notas[$asignatura_id]['nota2'] = $nota;
                                                   } elseif ($trimestre == 3) {
                                                       $notas[$asignatura_id]['nota3'] = $nota;
                                                   }
                                               }
                                           }
                                       }
                                       
                                       // Calcular el promedio para todas las asignaturas
                                       foreach ($notas as $asignatura_id => &$notas_asignatura) {
                                           $nota1 = $notas_asignatura['nota1'];
                                           $nota2 = $notas_asignatura['nota2'];
                                           $nota3 = $notas_asignatura['nota3'];
                                       
                                           if ($nota1 != '-' && $nota2 != '-' && $nota3 != '-') {
                                               // Calcular el promedio solo si hay notas disponibles
                                               $promedio = round(($nota1 + $nota2 + $nota3) / 3, 2);
                                               $notas_asignatura['promedio'] = $promedio;
                                           }
                                       }
                                       
                                       // Mostrar las asignaturas y notas en la tabla
                                       foreach ($asignaturas as $asignatura_id => $nombre_asignatura) {
                                           ?>
                                           <tr>
                                               <td><span class="user-subhead text-center"><?php echo $nombre_asignatura; ?></span></td>
                                               <td class="<?php echo $notas[$asignatura_id]['nota1'] >= 11 ? 'text-success' : 'text-danger'; ?>"><?php echo $notas[$asignatura_id]['nota1']; ?></td>
                                               <td class="<?php echo $notas[$asignatura_id]['nota2'] >= 11 ? 'text-success' : 'text-danger'; ?>"><?php echo $notas[$asignatura_id]['nota2']; ?></td>
                                               <td class="<?php echo $notas[$asignatura_id]['nota3'] >= 11 ? 'text-success' : 'text-danger'; ?>"><?php echo $notas[$asignatura_id]['nota3']; ?></td>
                                               <td class="<?php echo $notas[$asignatura_id]['promedio'] == '-' ? 'text-info' : ($notas[$asignatura_id]['promedio'] >= 11 ? 'text-success' : 'text-danger'); ?>"><?php echo $notas[$asignatura_id]['promedio']; ?></td>
                                               <td>
                                                   <form action="tablas_notas_padre_por_curso.php" method="post">
                                                       <input value="<?php echo $asignatura_id; ?>" id="ocultar" name="id_asignatura">
                                                       <input value="<?php echo $alumno_id; ?>" id="ocultar" name="alumno_id">
                                                       <button type='submit' class="btn btn-info">Detalle</button>
                                                   </form>
                                               </td>
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
        <script src="assets/js/sidebar.js"></script>
    </div>
</body>

</html>
   