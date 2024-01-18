<!DOCTYPE HTML>
<html>
	<head>
		<title>Registro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/stylelogin.css" />
		<link rel="stylesheet" href="css/2.css" />
		<script type="text/javascript" src="validarut.js"></script>
		<script type="text/javascript" src="jv.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
			<!-- Head -->
			<center>
				<br>
				<br>
				<img src="img/logo1.png" alt="Logo" style="width: 150px; height: auto;">
				
			</center>
				
                <center>
           
            <!--Formulario para registrar -->
        <form id="frmregistrar" class="grupo-entradas" method="POST" action="validar.php">
			
                <input type="text" class="usuario" placeholder="&#129492 &#128105 Nombre de usuario" required name="txtnombre">
                <input type="email" class="cajaentradatexto" placeholder="&#128273 Ingrese Correo" required name="txtusuario">
                <input type="password" placeholder="&#128274 Ingresar contraseña" required name="txtpassword" id="txtpassword"><input type="checkbox" onclick="verpassword()"> Mostrar contraseña
          		<input type="text" id="run" name="run" required oninput="checkRut(this)" placeholder="&#128100 Ingrese RUT sin puntos" required maxlength="10">
				<select name="rol">
				<option value="0" style="display:none;"><label>Seleccionar rol</label></option>
				<option value="USUARIO">USUARIO
				</option>
				<option value="ADMIN">ADMIN</option>
				</option>
				<option value="GESTION">GESTION</option>
				</option>
				</select>
				<input type="checkbox" class="checkboxvai" required><a href="Ayuda.html">He leído y acepto los términos y condiciones de uso.</a>
                <button type="submit" type="button" name="btnregistrarx">Registrar</button>
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

