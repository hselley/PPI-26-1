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
    <title>Registo</title>
</head>
<body>
    <h1>Registro de usuarios</h1>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena"> <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" min='0' max='120' step='1'> <br>
        <input type="submit" value="Registro">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $contrasena = $_POST['contrasena'];
            $edad = $_POST['edad'];

            // Cifrar la contraseña con password_hash
            $contrasena_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);

            // INSERT en la BD
            $sql = "INSERT INTO registro (nombre, contrasena, edad) VALUES ('$nombre', '$contrasena_cifrada', '$edad');";

            if(mysqli_query($conn, $sql)) {
                echo "<h3>Registo exitoso</h3>";
            } else {
                echo "<h3> Error: " . mysqli_error($conn) . "</h3>";
            }
        }

        mysqli_close($conn);
    ?>
</body>
</html>