<?php

    $servername = "localhost";
    $username = "id21917458_root";
    $password = "cuentafalsa17-A";
    $dbname = "id21917458_tienda";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

?>