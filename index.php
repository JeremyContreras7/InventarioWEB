<!DOCTYPE HTML>
<html>
	<head>
		<title>Inico Sesion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/stylelogin.css" />
		<script type="text/javascript" src="jv.js"></script>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
			<!-- Head -->
			<center>
				<br>
				<br>
				<img src="img/logo1.png" alt="Logo" style="width: 150px; height: auto;">
				
			</center>

			<!-- Navegador -->
				
                <center>
               <!--Formulario para el login -->
        <form id="frmlogin" class="grupo-entradas" method="POST" action="validar.php">
		<input type="text" placeholder="&#129492 &#128105 Ingrese Nombre de Usuario" name="txtnombre" required>
        <input type="email" class="cajaentradatexto" placeholder="&#128273; Ingrese Correo" name="txtusuario" required>
        <input type="password" class="cajaentradatexto" placeholder="&#128274; Ingresar contraseña" name="txtpassword" id="txtpassword" required><input type="checkbox" onclick="verpassword()"> Mostrar contraseña
		<select name="rol">
				<option value="0" style="display:none;"><label>Seleccionar rol</label></option>
				<option value="USUARIO">USUARIO</option>
				<option value="ADMIN">ADMIN</option>
				</option>
				<option value="GESTION">GESTION</option>
				</option>
</select>
        <button type="submit" class="botonenviar" name="btnloginx">Iniciar sesión</button>

        </form>
        
                </center>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>