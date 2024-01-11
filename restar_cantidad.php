<?php
include('conexion.php');

if (isset($_GET['id']) && isset($_GET['cantidad'])) {
    $productoId = $_GET['id'];
    $cantidadARestar = $_GET['cantidad'];

    // Restar la cantidad proporcionada a la columna cantidad en la tabla productos
    $updateQuery = "UPDATE productos SET cantidad = cantidad - $cantidadARestar WHERE id = $productoId";
    $conn->query($updateQuery);

    // Obtener la nueva cantidad después de restar
    $selectQuery = "SELECT cantidad FROM productos WHERE id = $productoId";
    $result = $conn->query($selectQuery);
    $data = $result->fetch_assoc();

    echo $data['cantidad'];
}
?>
