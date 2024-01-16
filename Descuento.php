<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleform.css">
    <link rel="icon" href="/img/logo.png">
    <title>Registro de Venta</title>
    <style>
        /* Agrega estilos CSS según sea necesario */
    </style>
</head>

<body>
    <h2>Registro de Venta</h2>

    <form method="POST" action="procesar_venta.php">
        <label for="producto_id">ID del Producto:</label>
        <input type="number" id="producto_id" name="producto_id" required><br><br>

        <label for="cantidad_vendida">Cantidad Vendida:</label>
        <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>

        <button type="submit">Registrar Venta</button>
    </form>
</body>
</html>
