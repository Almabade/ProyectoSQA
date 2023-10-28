<!-- /* Este archivo si se está usando */ -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I.E. ALAN TURING</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/tablas_notas_padre.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once('includes/sidebar_padre.php');
    $id_asignatura = $_POST['id_asignatura'];
    $alumno_id = $_POST['alumno_id'];
    include("src/conexion_db.php");
    $sql = "SELECT * FROM `asignatura` WHERE asignatura_id = '$id_asignatura'";
    $asig = mysqli_query($conexion, $sql);
    $asignatura = mysqli_fetch_array($asig);
    ?>

    <div>
        <div class="container bootstrap snippets bootdey"
            style="padding-top: 100px; padding-bottom: 100px;">
            <div class="row"
                style="background: #FFFFFF; border-radius: 20px;">
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <h1 class="texto-azul texto-negrita">Curso: <?php echo ($asignatura['nombre']); ?></h1>
                                <h2 class="texto-mostaza texto-negrita">Grado: <?php echo ($asignatura['nivel_id']); ?></h2><br>
                                <h2 class="texto-azul texto-negrita">Tabla de Notas</h2><br>
                                <table class="table user-list">
                                    <thead>
                                        <tr class="texto-azul">
                                            <th>Trimestre</th>
                                            <th class="text-center"><span>NOTA</span></th>
                                            <th class="text-center"><span>Estado</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="texto-azul">
                                        <tr>
                                            <td style="width: 196px;">
                                                <span class="user-subhead">1 Trimestre</span>
                                            </td>
                                            <td class="text-center">
                                                <p>
                                                    <?php
                                                    $sql = "SELECT * FROM `nota` WHERE asignatura_id = '$id_asignatura' AND alum_id = '$alumno_id' AND trimestre = '1'";
                                                    $asig = mysqli_query($conexion, $sql);
                                                    $asignatura = mysqli_fetch_array($asig);
                                                    if ($asignatura) {
                                                        echo $asignatura['nota'];
                                                        $nota1 = $asignatura['nota'];
                                                    } else {
                                                        echo "Sin notas";
                                                        $nota1 = null;
                                                    }
                                                    ?>
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-info"
                                                    style="background: <?php if ($nota1 >= 11) {
                                                                            echo ("green");
                                                                        } else {
                                                                            echo ("red");
                                                                        } ?>; color: #FFFFFF; border: #666;">
                                                    <?php if ($nota1 >= 11) {
                                                        echo ("Aprobado");
                                                    } else {
                                                        echo ("Desaprobado");
                                                    } ?>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 196px;">
                                                <span class="user-subhead">2 Trimestre</span>
                                            </td>
                                            <td class="text-center">
                                                <p>
                                                    <?php
                                                    $sql = "SELECT * FROM `nota` WHERE asignatura_id = '$id_asignatura' AND alum_id = '$alumno_id' AND trimestre = '2'";
                                                    $asig = mysqli_query($conexion, $sql);
                                                    $asignatura = mysqli_fetch_array($asig);
                                                    if ($asignatura) {
                                                        echo $asignatura['nota'];
                                                        $nota2 = $asignatura['nota'];
                                                    } else {
                                                        echo "Sin notas";
                                                        $nota2 = null;
                                                    }
                                                    ?>
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-info"
                                                    style="background: <?php if ($nota2 >= 11) {
                                                                            echo ("green");
                                                                        } else {
                                                                            echo ("red");
                                                                        } ?>; color: #FFFFFF; border: #666;">
                                                    <?php if ($nota2 >= 11) {
                                                        echo ("Aprobado");
                                                    } else {
                                                        echo ("Desaprobado");
                                                    } ?>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 196px;">
                                                <span class="user-subhead">3 Trimestre</span>
                                            </td>
                                            <td class="text-center">
                                                <p>
                                                    <?php
                                                    $sql = "SELECT * FROM `nota` WHERE asignatura_id = '$id_asignatura' AND alum_id = '$alumno_id' AND trimestre = '3'";
                                                    $asig = mysqli_query($conexion, $sql);
                                                    $asignatura = mysqli_fetch_array($asig);
                                                    if ($asignatura) {
                                                        echo $asignatura['nota'];
                                                        $nota3 = $asignatura['nota'];
                                                    } else {
                                                        echo "Sin notas";
                                                        $nota3 = null;
                                                    }
                                                    ?>
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-info"
                                                    style="background: <?php if ($nota3 >= 11) {
                                                                            echo ("green");
                                                                        } else {
                                                                            echo ("red");
                                                                        } ?>; color: #FFFFFF; border: #666;">
                                                    <?php if ($nota3 >= 11) {
                                                        echo ("Aprobado");
                                                    } else {
                                                        echo ("Desaprobado");
                                                    } ?>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                    // Calcular el promedio solo si se tienen las tres notas
                                    if ($nota1 !== null && $nota2 !== null && $nota3 !== null) {
                                        $promedio = ($nota1 + $nota2 + $nota3) / 3;
                                        $promedio = round($promedio, 2);
                                    } else {
                                        $promedio = null;
                                    }
                                    ?>
                                    <tfoot>
                                        <tr>
                                            <th class="texto-azul">PROMEDIO FINAL</th>
                                            <th class="text-center"><span class="texto-azul"><?php echo ($promedio !== null ? $promedio : "Sin notas"); ?></span></th>
                                            <th class="text-center"><button class="btn btn-info"
                                                        style="background: <?php if ($promedio >= 11) {
                                                                                echo ("green");
                                                                            } else {
                                                                                echo ("red");
                                                                            } ?>; color: #FFFFFF">
                                                        <?php if ($promedio >= 11) {
                                                            echo ("Aprobado");
                                                        } else {
                                                            echo ("Desaprobado");
                                                        } ?>
                                                    </button>
                                                </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/sidebar.js"></script>
</body>

</html>
