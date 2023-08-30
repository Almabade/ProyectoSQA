<?php
// Realiza la conexión a la base de datos (incluye esta parte si no lo has hecho ya)
include("src/conexion_db.php");
// Realiza la consulta para obtener todos los registros de la tabla "nota"
$consulta = "SELECT * FROM nota";
$resultado = mysqli_query($conexion, $consulta);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Encabezado y estilos -->
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID del Alumno</th>
                <th>ID de la Asignatura</th>
                <th>Trimestre</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Itera a través de los registros y muestra cada fila en la tabla HTML
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>{$fila['nota_id']}</td>";
                echo "<td>{$fila['alum_id']}</td>";
                echo "<td>{$fila['asignatura_id']}</td>";
                echo "<td>{$fila['trimestre']}</td>";
                echo "<td>{$fila['nota']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>

<?php
// Cierra la conexión a la base de datos al final
mysqli_close($conexion);
?>
