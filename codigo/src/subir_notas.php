<?php
    include("conexion_db.php");
    $status = "";
    $alumnos_id = $_POST["alumnos_id"];
    $asignatura_id = $_POST["asignatura_id"];
    $N1 = $_POST["N1"];
    $N2 = $_POST["N2"];
    $N3 = $_POST["N3"];

    // Imprimir valores para depuración
    echo "alumnos_id: " . $alumnos_id . "<br>";
    echo "asignatura_id: " . $asignatura_id . "<br>";
    echo "N1: " . $N1 . "<br>";
    echo "N2: " . $N2 . "<br>";
    echo "N3: " . $N3 . "<br>";

    // Verificar y actualizar/insertar la nota del Trimestre 1
    if ($N1 >= 0 && $N1 <= 20) {
        $query1 = "SELECT * FROM nota WHERE alum_id = $alumnos_id AND trimestre = 1 AND asignatura_id = $asignatura_id;";
        $result1 = mysqli_query($conexion, $query1);

        if (mysqli_num_rows($result1) > 0) {
            $update1 = "UPDATE nota SET nota = $N1 WHERE alum_id = $alumnos_id AND trimestre = 1 AND asignatura_id = $asignatura_id;";
            mysqli_query($conexion, $update1);
            echo "Update 1 successful<br>";
        } else {
            $insert1 = "INSERT INTO nota (alum_id, asignatura_id, trimestre, nota) VALUES ($alumnos_id, $asignatura_id, 1, $N1);";
            mysqli_query($conexion, $insert1);
            echo "Insert 1 successful<br>";
        }
    }

    // Verificar y actualizar/insertar la nota del Trimestre 2
    if ($N2 >= 0 && $N2 <= 20) {
        $query2 = "SELECT * FROM nota WHERE alum_id = $alumnos_id AND trimestre = 2 AND asignatura_id = $asignatura_id;";
        $result2 = mysqli_query($conexion, $query2);

        if (mysqli_num_rows($result2) > 0) {
            $update2 = "UPDATE nota SET nota = $N2 WHERE alum_id = $alumnos_id AND trimestre = 2 AND asignatura_id = $asignatura_id;";
            mysqli_query($conexion, $update2);
        } else {
            $insert2 = "INSERT INTO nota (alum_id, asignatura_id, trimestre, nota) VALUES ($alumnos_id, $asignatura_id, 2, $N2);";
            mysqli_query($conexion, $insert2);
        }
    }

    // Verificar y actualizar/insertar la nota del Trimestre 3
    if ($N3 >= 0 && $N3 <= 20) {
        $query3 = "SELECT * FROM nota WHERE alum_id = $alumnos_id AND trimestre = 3 AND asignatura_id = $asignatura_id;";
        $result3 = mysqli_query($conexion, $query3);

        if (mysqli_num_rows($result3) > 0) {
            $update3 = "UPDATE nota SET nota = $N3 WHERE alum_id = $alumnos_id AND trimestre = 3 AND asignatura_id = $asignatura_id;";
            mysqli_query($conexion, $update3);
        } else {
            $insert3 = "INSERT INTO nota (alum_id, asignatura_id, trimestre, nota) VALUES ($alumnos_id, $asignatura_id, 3, $N3);";
            mysqli_query($conexion, $insert3);
        }
    }

    header("location: ../docente_notas.php?mensaje=1");

?>


