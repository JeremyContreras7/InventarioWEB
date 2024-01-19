<!DOCTYPE HTML>
<html>

<head>
	<title>Inico Sesion</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="css/stylelogin.css" />
</head>

<body class="homepage is-preload">
	<div id="page-wrapper">
		<!-- Head -->
		<center>
			<br>
			<br>
			<img src="img/logo1.png" alt="Logo">

		</center>

		<!-- Navegador -->

		<center>
			
			<!--Formulario para el login -->
			<form id="frmlogin" class="grupo-entradas" method="POST" action="validar.php">
			<h1>Bienvenido</h1>	
				<input type="text" class="cajaentradatexto" placeholder="&#129492; Ingrese Nombre de Usuario" name="txtnombre" required>
				<input type="email" class="cajaentradatexto" placeholder="&#128273; Ingrese Correo" name="txtusuario" required>
				<input type="password" class="cajaentradatexto" placeholder="&#128274; Ingresar contraseña" name="txtpassword" id="txtpassword" required><input type="checkbox" onclick="verpassword()"> 
				<p id="mostrarC">Mostrar contraseña</p>
				<select name="rol" required>
					<option disabled selected value=""><label>Seleccionar Rol</label></option>
					<option value="USUARIO">USUARIO</option>
					<option value="ADMIN">ADMIN</option>
					</option>
					<option value="GESTION">GESTION</option>
					</option>
				</select>
				<button type="submit" class="botonenviar" name="btnloginx">Iniciar sesión</button>

			</form>

		</center>

</body>

</html>