<?php
include('conexion.php');

if (isset($_GET['id']) && isset($_GET['cantidad'])) {
    $productoId = $_GET['id'];
    $cantidadASumar = $_GET['cantidad'];

    // Sumar la cantidad proporcionada a la columna cantidad en la tabla productos
    $updateQuery = "UPDATE productos SET cantidad = cantidad + $cantidadASumar WHERE id = $productoId";
    $conn->query($updateQuery);

    // Obtener la nueva cantidad después de sumar
    $selectQuery = "SELECT cantidad FROM productos WHERE id = $productoId";
    $result = $conn->query($selectQuery);
    $data = $result->fetch_assoc();

    echo $data['cantidad'];
}
?>
