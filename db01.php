<?php
    $servername = "db";     // El nombre del servicio en Docker
    $username = "usuario";
    $password = "123456";
    $dbname = "usuario";
    
    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected succesfully to MySQL";

    $conn->close();
?>