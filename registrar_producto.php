<?php

    include_once("conexion.php");

    $producto = json_decode($_POST["producto"]);
    
    echo json_encode($producto);

    $sql = "INSERT INTO productos (codigo_barras, descripcion, categoria, precio_compra, precio_venta, existencia, unidad_medida) VALUES ('$producto->codigo_barras','$producto->descripcion','$producto->categoria','$producto->precio_compra','$producto->precio_venta','$producto->existencia','$producto->unidad_medida')";
    if ($conn->query($sql) === TRUE) {
        echo "ok";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>