<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Incluir el archivo de conexión
include('conexion.php');

// Verificar si se proporciona un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Verificar si se envió el formulario de edición
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];

        // Actualizar los datos en la base de datos
        $query = "UPDATE productos SET nombre='$nombre', cantidad='$cantidad' WHERE id='$id'";
        $resultado = $conn->query($query);

        if ($resultado) {
            echo "Se ha actualizado el producto correctamente";
        } else {
            echo "Error al actualizar el producto: " . $conn->error;
        }
    }

    // Obtener los datos actuales del producto
    $queryProducto = "SELECT * FROM productos WHERE id='$id'";
    $resultadoProducto = $conn->query($queryProducto);

    if ($resultadoProducto) {
        $data = $resultadoProducto->fetch_assoc();
    } else {
        echo "Error al obtener los datos del producto: " . $conn->error;
    }
} else {
    echo "ID de producto no válido";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleform.css">
    <link rel="icon" href="/img/logo.png">
    <title>Editar Producto</title>
</head>

<body>
    <h1>Editar Producto</h1>
    <form method="POST">
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $data['nombre']; ?>" required><br><br>

        <label for="cantidad">Cantidad:</label><br>
        <input type="number" id="cantidad" name="cantidad" value="<?php echo $data['cantidad']; ?>" required><br><br>

        <button type="submit">Guardar Cambios</button>
        
    </form>
    <a href="Vista/UsuarioRegistro/IngresarProductos.php"><button type="button">Volver</button></a>
</body>
</html>
