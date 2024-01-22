<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Incluir el archivo de conexión
$konexta = mysqli_connect("localhost", "root", "", "imagen");

if ($konexta->connect_errno) {
    echo "No hay conexión: (" . $konexta->connect_errno . ") " . $konexta->connect_error;
}

// Verificar la conexión
if ($konexta->connect_error) {
    die("Error de conexión: " . $konexta->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['nombre']) || empty($_POST['cantidad'])) {
        echo "Por favor, llene los campos correctamente";
    } else {
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];
        $categoria = $_POST['categoria'];
        $codigo = $_POST['codigo'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $query = "INSERT INTO productos (nombre, codigo, cantidad, imagen,categoria) VALUES ('$nombre','$codigo','$cantidad','$imagen','$categoria')";
        $resultado = $konexta->query($query);

        if ($resultado) {
            echo "Se ha insertado los datos";
        } else {
            echo "No se ha insertado los datos";
        }
    }
}

// Consultar los productos registrados
$result = $konexta->query("SELECT * FROM productos");
$num_rows = $result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleform.css">
    <link rel="icon" href="/img/logo.png">
    <title>Ingresar Datos</title>
    <style>
        #imagen-preview {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>

<body>
    <h1>Registrar Producto</h1>
    <form method="POST" enctype="multipart/form-data" action="../validar.php">
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="codigo">Codigo del Producto:</label>
        <input type="text" id="codigo" name="codigo" required><br><br>
        <label for="cantidad">Cantidad:</label><br>
        <input type="number" id="cantidad" name="cantidad" required><br><br>
        <select name="categoria" required>
					<option disabled selected value=""><label>Seleccionar Categoria</label></option>
                    <option disabled selected value=""><label>TECNOLOGIA</label></option>
					<option value="COMPUTADORES">COMPUTADORES</option>
					<option value="IMPRESORAS">IMPRESORAS</option>
                    <option value="ESCANER">ESCANER</option>
					<option value="PERIFERICOS">PERIFERICOS</option>
                    <option value="CABLEADO">CABLEADO</option>
					<option value="PROYECTORES">PROYECTORES</option>
                    <option value="RED">DISPOSITIVO DE RED</option>
                    <option disabled selected value=""><label>MATERIAL DE OFICINA</label></option>
					<option value="ESCRITURA">UTESILLIOS DE ESCRITURA</option>
                    <option value="LIBROS">LIBROS Y CUADERNOS</option>
					<option value="SUMINISTROS">SUMINISTROS DE OFICINA</option>
                    <option value="MATERIAL">MATERIAL DE OFICINA</option>
					<option value="RESMAS">RESMAS</option>
                    <option disabled selected value=""><label>MOBILIARIO DE OFICINA</label></option>
                    <option value="ESCRITORIO">ESCRITORIO</option>
					<option value="SILLAS">SILLAS</option>
                    <option value="MUEBLES">MUEBLES</option>
                    <option disabled selected value=""><label>LIMPIEZA</label></option>
                    <option value="BOLSAS">BOLSAS DE BASURA</option>
					<option value="TOALLAS">TOALLAS DE PAPEL Y PAÑUELOS</option>
                    <option value="LIMPIEZA">PRODUCTO DE LIMPIEZA</option>
                    <option value="ESCOBA">ESCOBA Y PALAS</option>		
		</select>
        <label for="imagen">Subir Foto:</label><br>
        <input type="file" id="imagen" name="imagen" onchange="mostrarVistaPrevia()"><br><br>

        <img id="imagen-preview" src="#" alt="Vista Previa de la Foto" style="display: none;"><br><br>

        <button type="submit">Guardar Datos</button>
        <button onclick="history.back(-1)">Volver</button>
    </form>
    

    <h2>Productos Registrados</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Codigo del Producto</th>
                <th>Nombre Producto</th>
                <th>Cantidad</th>
                <th>Sumar</th>
                <th>Restar</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($num_rows > 0) {
                while ($data = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><img height="100px" src="data:image/jpeg;base64,<?php echo base64_encode($data['imagen']); ?>" alt="Producto"></td>
                        <td><?php echo $data['codigo']; ?></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td id="cantidad_<?php echo $data['id']; ?>"><?php echo $data['cantidad']; ?></td>
                        <td><a href='agregar.php?id=<?php echo $data['id']; ?>'>Agregar Stock</a></td>
                        <td><a href='Descuento.php?id=<?php echo $data['id']; ?>'>Sacar Stock</a></td>
                        <td><a href='editar.php?id=<?php echo $data['id']; ?>'>Editar</a></td>
                        <td><a href='eliminar.php?id=<?php echo $data['id']; ?>'>Eliminar</a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>

    <script>
        function mostrarVistaPrevia() {
            var input = document.getElementById('imagen');
            var vistaPrevia = document.getElementById('imagen-preview');

            if (input.files && input.files[0]) {
                var lector = new FileReader();

                lector.onload = function (e) {
                    vistaPrevia.src = e.target.result;
                    vistaPrevia.style.display = 'block';
                }

                lector.readAsDataURL(input.files[0]);
            } else {
                vistaPrevia.src = '#';
                vistaPrevia.style.display = 'none';
            }
        }
    </script>
</body>
</html>
