<?php
    $server = "db";
    $username = "usuario";
    $password = "123456";
    $dbname = "sistema";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    // Verificar la conexión
    if(!$conn) {
        die("Falló la conexión a la BD ". mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="estiloTabla.css">
</head>
<body>
    <h1>Consulta de usuarios</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>
        <?php
            // Consulta a la BD
            $sql = "SELECT * FROM registro;";
            $resultado = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["edad"] . "</td>";
                echo "</tr>";
            }
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>