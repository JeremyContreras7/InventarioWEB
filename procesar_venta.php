<?php
// Incluir el archivo de conexión
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $productoId = $_POST['producto_id'];
    $cantidadVendida = $_POST['cantidad_vendida'];

    // Consultar la cantidad actual del producto
    $consultaCantidad = "SELECT cantidad FROM productos WHERE id = $productoId";
    $resultadoConsulta = $conn->query($consultaCantidad);

    if ($resultadoConsulta->num_rows > 0) {
        $producto = $resultadoConsulta->fetch_assoc();
        $cantidadActual = $producto['cantidad'];

        // Verificar si hay suficiente cantidad para la venta
        if ($cantidadActual >= $cantidadVendida) {
            // Restar la cantidad vendida a la cantidad actual
            $nuevaCantidad = $cantidadActual - $cantidadVendida;

            // Actualizar la cantidad en la base de datos
            $actualizarCantidadQuery = "UPDATE productos SET cantidad = $nuevaCantidad WHERE id = $productoId";
            $conn->query($actualizarCantidadQuery);

            // Registrar la venta en el historial de ventas
            $fechaVenta = date('Y-m-d H:i:s');
            $registrarVentaQuery = "INSERT INTO historialventa (producto_id, cantidad_vendida, fecha) VALUES ($productoId, $cantidadVendida, '$fechaVenta')";
            $conn->query($registrarVentaQuery);

            echo "Venta registrada correctamente. Cantidad actualizada: $nuevaCantidad";

            

        } else {
            echo "No hay suficiente cantidad disponible para la venta.";
        }
    } else {
        echo "Producto no encontrado.";
    }

} else {
    echo "Acceso no válido.";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['producto_id']) && isset($_POST['cantidad_vendida'])) {
        $producto_id = $_POST['producto_id'];
        $cantidad_vendida = $_POST['cantidad_vendida'];

        // Crear la consulta SQL para insertar en el historial de venta
        $insertQuery = "INSERT INTO historialventa (producto_id, cantidad_vendida) VALUES ($producto_id, $cantidad_vendida)";

        // Ejecutar la consulta
        $resultado = $conn->query($insertQuery);

        if ($resultado) {
            echo "Se ha registrado la venta en el historial.";
        } else {
            echo "Error al registrar la venta en el historial: " . $conn->error;
        }
    } else {
        echo "Error: Datos incompletos.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
