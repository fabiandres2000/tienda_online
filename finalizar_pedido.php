<?php
    include_once("conexion.php");

    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $registrado = $_POST["registrado"];
    $celular = $_POST["celular"];
    $total_pagar = $_POST["total_pagar"];
    $carrito = json_decode($_POST["carrito"], true);

    if($registrado == 0){
        $sql = "INSERT INTO `clientes`(`nombre`, `celular`, `direccion`) VALUES ('$nombre','$celular','$direccion')";
        $conn->query($sql);
    }

    $sql = "SELECT * FROM clientes where celular = ".$celular;
    $result = $conn->query($sql);
    $cliente = $result->fetch_assoc();

    $fecha = date('d/m/Y');
    $id_cliente = $cliente["id"];

    $sql = "INSERT INTO `domicilios`(`id_cliente`, `total_pagar`, `fecha_domi`) VALUES ('$id_cliente','$total_pagar','$fecha')";
    $conn->query($sql);

    $id_pedido = $conn->insert_id;

    foreach ($carrito as $item) {
        $descripcion = $item["descripcion"];
        $codigo_barras = $item["codigo_barras"];
        $precio = $item["precio"];
        $cantidad = $item["cantidad"];
        $unidad = $item["unidad"];

        $sql = "INSERT INTO `productos_vendidos`(`id_domicilio`, `descripcion`, `codigo_barras`, `precio`, `cantidad`) VALUES ('$id_pedido','$descripcion','$codigo_barras', '$precio', '$cantidad')";
        $conn->query($sql);
    }

    echo "¡Pedido realizado correctamente!";

?>