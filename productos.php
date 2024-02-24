<?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "punto_venta";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para obtener los productos
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    // Crear un array para almacenar los productos
    $productos = array();

    // Si hay resultados, agregarlos al array
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
    }

    // Convertir el array a formato JSON
    $json = json_encode($productos);

    // Imprimir el JSON
    echo $json;

    // Cerrar la conexión
    $conn->close();
?>
