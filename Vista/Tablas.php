<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Incluir el archivo de conexión
include('conexion.php');

// Consultar los productos registrados
$query = mysqli_query($conn, "SELECT * FROM productos");
$result = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleform.css">
    <link rel="icon" href="/img/logo.png">
    <title>Productos Registrados</title>
    <style>
        #imagen-preview {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>

<body>
    <h2>Productos Registrados</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre Producto</th>
                <th>Cantidad</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result > 0) {
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><img height="100px" src="data:image/jpeg;base64,<?php echo base64_encode($data['imagen']); ?>" alt="Producto"></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['cantidad']; ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='5'>No hay productos registrados.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
