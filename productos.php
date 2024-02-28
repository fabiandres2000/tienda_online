<?php

    include_once("conexion.php");

    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    $productos = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $productos[] = $row;
        }
    }

    $json = json_encode($productos);
    echo $json;
    $conn->close();
?>
