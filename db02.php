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
    while($row = mysqli_fetch_array($result)) {
        echo $row['id'] . " " . $row['idModelo'] . " " . $row['idUsuario'] . " " . $row['folio'];
        echo "<br>";
    }

    mysqli_close($conn);
?>