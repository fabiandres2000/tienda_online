<?php


    $servername = "localhost";
    $username = "FQ006US00001";
    $password = "cuentafalsa17*A";
    $dbname = "tienda";

    /*
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "punto_venta";
    */
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

?>