<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleregistro.css">
    <link rel="icon" href="/img/logo.png">
    <title>Registro</title>
</head>
<body>
    <img src="img/logo1.png" alt="Logo" style="width: 150px; height: auto;">
    <form>
        <h2 style="color: #fff;">Registro</h2>
        <label for="nombre" style="color: #fff;">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email" style="color: #fff;">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="contrasena" style="color: #fff;">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <label for="seleccionar" style="color: #fff;">Seleccionar:</label>
        <select id="seleccionar" name="seleccionar">
            <option value="opcion1">Usuario</option>
            <option value="opcion2">Registro</option>
        </select>

        <button type="submit">Registrarse</button>
    </form>
    <p>© Jeremy Contreras Nicolas Cisternas 2024</p>

</body>
</html>
