<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleform.css">
    <link rel="icon" href="/img/logo.png">
    <title>Descuento de Stock</title>
</head>
<body>
    <h2>Descuento de Stock</h2>
    <?php
    $konexta = mysqli_connect("localhost", "root", "", "imagen");

    // Verificar si se recibió una ID válida a través de GET
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $productoId = $_GET['id'];

        // Realizar la consulta para obtener la información del producto
        $consultaProducto = "SELECT * FROM productos WHERE id = $productoId";
        $resultadoConsulta = $konexta->query($consultaProducto);

        if ($resultadoConsulta->num_rows > 0) {
            $producto = $resultadoConsulta->fetch_assoc();
            
            // Validación específica para la categoría "RESMAS"
            if ($producto['categoria'] == "RESMAS" && $producto['cantidad'] < 20) {
                echo "<script>alert('Error: Hay bajo Stock.');</script>";
                ?>
                <form method="POST" action="../procesar_venta.php" >
                    <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                    <label for="cantidad_vendida">Cantidad Vendida:</label>
                    <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                    <button type="submit">Registrar Venta</button>
                </form>
            
            <?php
            
            } 
            
            
            if ($producto['categoria'] == "COMPUTADORES" && $producto['cantidad'] < 20) {
                echo "<script>alert('Error: Hay bajo Stock.');</script>";
                ?>
                <form method="POST" action="../procesar_venta.php" >
                    <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                    <label for="cantidad_vendida">Cantidad Vendida:</label>
                    <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                    <button type="submit">Registrar Venta</button>
                </form>
                <?php
                }
            
            if ($producto['categoria'] == "IMPRESORAS" && $producto['cantidad'] < 20) {
                echo "<script>alert('Error: Hay bajo Stock.');</script>";
                ?>
                <form method="POST" action="../procesar_venta.php" >
                    <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                    <label for="cantidad_vendida">Cantidad Vendida:</label>
                    <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                    <button type="submit">Registrar Venta</button>
                </form>
                
                <?php
                }
                if ($producto['categoria'] == "ESCANER" && $producto['cantidad'] < 20) {
                    echo "<script>alert('Error: Hay bajo Stock.');</script>";
                    ?>
                    <form method="POST" action="../procesar_venta.php" >
                        <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                        <label for="cantidad_vendida">Cantidad Vendida:</label>
                        <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                        <button type="submit">Registrar Venta</button>
                    </form>
                
                <?php
                
                } 
                
                if ($producto['categoria'] == "PERIFERICOS" && $producto['cantidad'] < 20) {
                    echo "<script>alert('Error: Hay bajo Stock.');</script>";
                    ?>
                    <form method="POST" action="../procesar_venta.php" >
                        <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                        <label for="cantidad_vendida">Cantidad Vendida:</label>
                        <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                        <button type="submit">Registrar Venta</button>
                    </form>
                    <?php
                    }
                
                if ($producto['categoria'] == "CABLEADO" && $producto['cantidad'] < 20) {
                    echo "<script>alert('Error: Hay bajo Stock.');</script>";
                    ?>
                    <form method="POST" action="../procesar_venta.php" >
                        <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                        <label for="cantidad_vendida">Cantidad Vendida:</label>
                        <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                        <button type="submit">Registrar Venta</button>
                    </form>
                    
                    <?php
                }
                if ($producto['categoria'] == "PROYECTORES" && $producto['cantidad'] < 20) {
                        echo "<script>alert('Error: Hay bajo Stock.');</script>";
                        ?>
                        <form method="POST" action="../procesar_venta.php" >
                            <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                            <label for="cantidad_vendida">Cantidad Vendida:</label>
                            <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                            <button type="submit">Registrar Venta</button>
                        </form>
                    
                    <?php
                    
                    } 
                  
                    if ($producto['categoria'] == "RED" && $producto['cantidad'] < 20) {
                        echo "<script>alert('Error: Hay bajo Stock.');</script>";
                        ?>
                        <form method="POST" action="../procesar_venta.php" >
                            <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                            <label for="cantidad_vendida">Cantidad Vendida:</label>
                            <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                            <button type="submit">Registrar Venta</button>
                        </form>
                        <?php
                        }
                    
                    if ($producto['categoria'] == "ESCRITURA" && $producto['cantidad'] < 20) {
                        echo "<script>alert('Error: Hay bajo Stock.');</script>";
                        ?>
                        <form method="POST" action="../procesar_venta.php" >
                            <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                            <label for="cantidad_vendida">Cantidad Vendida:</label>
                            <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                            <button type="submit">Registrar Venta</button>
                        </form>
                        
                        <?php
                        }
                        if ($producto['categoria'] == "LIBROS" && $producto['cantidad'] < 20) {
                            echo "<script>alert('Error: Hay bajo Stock.');</script>";
                            ?>
                            <form method="POST" action="../procesar_venta.php" >
                                <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                                <label for="cantidad_vendida">Cantidad Vendida:</label>
                                <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                                <button type="submit">Registrar Venta</button>
                            </form>
                        
                        <?php
                        
                        } 
                        
                        if ($producto['categoria'] == "SUMINISTROS" && $producto['cantidad'] < 20) {
                            echo "<script>alert('Error: Hay bajo Stock.');</script>";
                            ?>
                            <form method="POST" action="../procesar_venta.php" >
                                <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                                <label for="cantidad_vendida">Cantidad Vendida:</label>
                                <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                                <button type="submit">Registrar Venta</button>
                            </form>
                            <?php
                            }
                        
                        if ($producto['categoria'] == "MATERIAL" && $producto['cantidad'] < 20) {
                            echo "<script>alert('Error: Hay bajo Stock.');</script>";
                            ?>
                            <form method="POST" action="../procesar_venta.php" >
                                <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                                <label for="cantidad_vendida">Cantidad Vendida:</label>
                                <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                                <button type="submit">Registrar Venta</button>
                            </form>
                            
                            <?php
                }
                if ($producto['categoria'] == "ESCRITORIO" && $producto['cantidad'] < 20) {
                    echo "<script>alert('Error: Hay bajo Stock.');</script>";
                    ?>
                    <form method="POST" action="../procesar_venta.php" >
                        <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                        <label for="cantidad_vendida">Cantidad Vendida:</label>
                        <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                        <button type="submit">Registrar Venta</button>
                    </form>
                
                <?php
                
                } 
                if ($producto['categoria'] == "SILLAS" && $producto['cantidad'] < 20) {
                    echo "<script>alert('Error: Hay bajo Stock.');</script>";
                    ?>
                    <form method="POST" action="../procesar_venta.php" >
                        <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                        <label for="cantidad_vendida">Cantidad Vendida:</label>
                        <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                        <button type="submit">Registrar Venta</button>
                    </form>
                    <?php
                    }
                
                if ($producto['categoria'] == "MUEBLES" && $producto['cantidad'] < 20) {
                    echo "<script>alert('Error: Hay bajo Stock.');</script>";
                    ?>
                    <form method="POST" action="../procesar_venta.php" >
                        <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                        <label for="cantidad_vendida">Cantidad Vendida:</label>
                        <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                        <button type="submit">Registrar Venta</button>
                    </form>
                    
                    <?php
                    }
                    if ($producto['categoria'] == "BOLSAS" && $producto['cantidad'] < 20) {
                        echo "<script>alert('Error: Hay bajo Stock.');</script>";
                        ?>
                        <form method="POST" action="../procesar_venta.php" >
                            <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                            <label for="cantidad_vendida">Cantidad Vendida:</label>
                            <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                            <button type="submit">Registrar Venta</button>
                        </form>
                    
                    <?php
                    
                    } 
                    
                    if ($producto['categoria'] == "TOALLAS" && $producto['cantidad'] < 20) {
                        echo "<script>alert('Error: Hay bajo Stock.');</script>";
                        ?>
                        <form method="POST" action="../procesar_venta.php" >
                            <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                            <label for="cantidad_vendida">Cantidad Vendida:</label>
                            <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                            <button type="submit">Registrar Venta</button>
                        </form>
                        <?php
                        }
                    
                    if ($producto['categoria'] == "LIMPIEZA" && $producto['cantidad'] < 20) {
                        echo "<script>alert('Error: Hay bajo Stock.');</script>";
                        ?>
                        <form method="POST" action="../procesar_venta.php" >
                            <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                            <label for="cantidad_vendida">Cantidad Vendida:</label>
                            <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                            <button type="submit">Registrar Venta</button>
                        </form>
                        
                        <?php
            }
            if ($producto['categoria'] == "ESCOBA" && $producto['cantidad'] < 20) {
                echo "<script>alert('Error: Hay bajo Stock.');</script>";
                ?>
                <form method="POST" action="../procesar_venta.php" >
                    <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                    <label for="cantidad_vendida">Cantidad Vendida:</label>
                    <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                    <button type="submit">Registrar Venta</button>
                </form>
                
                <?php
        }else {
                ?>
                <form method="POST" action="../procesar_venta.php" >
                    <input type="hidden" name="id" value="<?php echo $productoId; ?>"><br><br>
                    <label for="cantidad_vendida">Cantidad Vendida:</label>
                    <input type="number" id="cantidad_vendida" name="cantidad_vendida" required><br><br>
                    <button type="submit">Registrar Venta</button>
                </form>
                <?php
            }
        } else {
            echo "Producto no encontrado.";
        }
    } else {
        echo "Acceso no válido.";
    }
    ?>

    <a href="IngresarProductos.php"><button type="button">Volver</button></a>

    <h2>Historial de Ventas</h2>

    <?php
    // Consultar el historial de ventas
    $consultaHistorial = "SELECT * FROM historialventa WHERE producto_id = $productoId";
    $resultadoHistorial = $konexta->query($consultaHistorial);

    if ($resultadoHistorial->num_rows > 0) {
        echo "<table border='1'>";
        echo "<thead><tr><th>ID</th><th>ID Producto</th><th>Cantidad Vendida</th><th>Fecha</th></tr></thead>";
        echo "<tbody>";
        while ($venta = $resultadoHistorial->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $venta['id'] . "</td>";
            echo "<td>" . $venta['producto_id'] . "</td>";
            echo "<td>" . $venta['cantidad_vendida'] . "</td>";
            echo "<td>" . $venta['fecha_venta'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "No hay historial de ventas para este producto.";
    }
    ?>
</body>
</html>
