<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Incluir el archivo de conexión
include('conexion.php');

// Verificar si se proporciona un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el producto de la base de datos
    $query = "DELETE FROM productos WHERE id='$id'";
    $resultado = $conn->query($query);

    if ($resultado) {
        echo "Producto eliminado correctamente";
        echo '<br><a href="javascript:history.go(-1)">Volver atrás</a>';
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
    }
} else {
    echo "ID de producto no válido";
}
?>
