<?php

$servername = "localhost";
$username = "id21917458_root";
$password = "cuentafalsa17-A";
$dbname = "id21917458_tienda";

$codigo_anterior = $_POST["codigo_anterior"];
$codigo_nuevo = $_POST["codigo_nuevo"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "UPDATE productos SET codigo_barras = '$codigo_nuevo' WHERE codigo_barras = '$codigo_anterior'";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

$conn->close();

?>