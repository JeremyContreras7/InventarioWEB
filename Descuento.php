<?php
include('conexion.php');

// Variables para almacenar los mensajes
$mensaje = '';
$mensajeClase = '';

// Verificar si se envió el formulario de descuento
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['cantidadARestar'])) {
        $productoId = $_POST['id'];
        $cantidadARestar = $_POST['cantidadARestar'];

        // Restar la cantidad proporcionada a la columna cantidad en la tabla productos
        $updateQuery = "UPDATE productos SET cantidad = cantidad - $cantidadARestar WHERE id = $productoId";
        $conn->query($updateQuery);

        // Obtener la información actualizada del producto
        $selectQuery = "SELECT * FROM productos WHERE id = $productoId";
        $result = $conn->query($selectQuery);
        $producto = $result->fetch_assoc();

        // Mensaje de éxito
        $mensaje = "Se ha restado la cantidad correctamente.";
        $mensajeClase = 'success';
    } else {
        // Mensaje de error si no se proporcionaron datos adecuados
        $mensaje = "Error al restar la cantidad. Por favor, proporcione datos válidos.";
        $mensajeClase = 'error';
    }
}

// Obtener la información del producto seleccionado
if (isset($_GET['id'])) {
    $productoId = $_GET['id'];
    $selectQuery = "SELECT * FROM productos WHERE id = $productoId";
    $result = $conn->query($selectQuery);
    $producto = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleform.css">
    <link rel="icon" href="/img/logo.png">
    <title>Descuento de Cantidad</title>
    <style>
        .success {
            background-color: white;
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Descuento de Cantidad</h2>
    
    <?php if(isset($mensaje) && !empty($mensaje)): ?>
        <p class="<?php echo $mensajeClase; ?>"><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <?php if(isset($producto)): ?>
        <form >
        <h3>Información del Producto</h3>
        <p><strong>ID:</strong> <?php echo $producto['id']; ?></p>
        <p><strong>Nombre del Producto:</strong> <?php echo $producto['nombre']; ?></p>
        <p><strong>Cantidad Actual:</strong> <?php echo $producto['cantidad']; ?></p>
        </form>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" value="<?php echo $producto['nombre']; ?>" readonly><br><br>

            <label for="cantidadARestar">Cantidad a Restar:</label>
            <input type="number" id="cantidadARestar" name="cantidadARestar" required><br><br>

            <button type="submit">Restar Cantidad</button>
        </form>
        <button><a href="Vista/IngresarProductos.php"></a>Volver</button>
    <?php else: ?>
        <p>No se ha seleccionado un producto.</p>
    <?php endif; ?>
</body>
</html>
