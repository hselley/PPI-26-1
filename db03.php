<?php
    $servername = "db";     // El nombre del servicio en Docker
    $username = "usuario";
    $password = "123456";
    $dbname = "usuario";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($conn, "SELECT * FROM compra;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta MySQL</title>
</head>
<body>
    <h1>PHP + MySQL</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Usuario</th>
            <th>Folio de compra</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td><td>" . $row['idModelo'] . "</td><td>" . $row['idUsuario'] . "</td><td>" . $row['folio'] . "</td>";
                echo "</tr>";
            }
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>