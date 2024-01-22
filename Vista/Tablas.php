<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Incluir el archivo de conexión
$konexta = mysqli_connect("localhost", "root", "", "imagen");

// Consultar el historial de ventas con información de las tablas 'historialventa' y 'productos'
$resultHistorial = $konexta->query("SELECT historialventa.id, historialventa.producto_id, productos.nombre AS nombre_producto, historialventa.cantidad_vendida, historialventa.nombre_usuario, historialventa.fecha_venta, productos.codigo FROM historialventa LEFT JOIN productos ON historialventa.producto_id = productos.id");
$num_rows_historial = $resultHistorial->num_rows;

// Consultar información de la tabla 'productos'
$resultProductos = $konexta->query("SELECT * FROM productos");
$num_rows_productos = $resultProductos->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleform.css">
    <link rel="icon" href="/img/logo.png">
    <title>Productos y Historial de Ventas</title>
    <style>
        #imagen-preview {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>

<body>
    <!-- ... (código anterior) ... -->

    <h2>Productos Registrados</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Codigo Del Producto</th>
                <th>Nombre Del Producto</th>
                <th>Cantidad</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($num_rows_productos > 0) {
                while ($data = $resultProductos->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><img height="100px" src="data:image/jpeg;base64,<?php echo base64_encode($data['imagen']); ?>" alt="Producto"></td>
                        <td><?php echo $data['codigo']; ?></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['cantidad']; ?></td>
                        <td><?php echo $data['categoria']; ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='3'>No hay productos registrados.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Historial de Ventas</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Producto</th>
                <th>Nombre Producto</th>
                <th>Cantidad Vendida</th>
                <th>Nombre Usuario</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($num_rows_historial > 0) {
                while ($venta = $resultHistorial->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $venta['id']; ?></td>
                        <td><?php echo $venta['producto_id']; ?></td>
                        <td><?php echo $venta['nombre_producto']; ?></td>
                        <td><?php echo $venta['cantidad_vendida']; ?></td>
                        <td><?php echo $venta['nombre_usuario']; ?></td>
                        <td><?php echo $venta['fecha_venta']; ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='4'>No hay historial de ventas registrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <button onclick="history.back(-1)">Volver</button>

</body>
</html>
