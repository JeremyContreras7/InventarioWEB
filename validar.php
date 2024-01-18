<?php
include('conexion.php');

$nombre = $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];
$nombre2 = $_POST["txtnombre"];
$miRut = $_POST["run"];
$rol 	= $_POST["rol"];
//Para iniciar sesión
if(isset($_POST["btnloginx"]))
{

$queryusuario = mysqli_query($konexta,"SELECT * FROM login WHERE nombre = '$nombre2' and usu = '$nombre'and rol = '$rol'");
$nr 		= mysqli_num_rows($queryusuario); 
$mostrar	= mysqli_fetch_array($queryusuario); 
	
if (($nr == 1) && (password_verify($pass,$mostrar['pass'])) )
	{ 
		session_start();
		$_SESSION['nombredelusuario']=$nombre;
		$_SESSION['nombre']=$nombre2;
		if($rol=="USUARIO")
		{	
			header("Location: /Vista/Usuario/HomeUsuario.php");
		}
	else if ($rol=="ADMIN")
		{
			header("Location: /Vista/Admin/HomeAdmin.php");
		}
	 if ($rol=="GESTION")
		{
			header("Location: /Vista/Gestion/HomeGestion.php");
		}

	}
	
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.php' </script>";
	}
}

//Para registrar
if(isset($_POST["btnregistrarx"]))
{

$queryusuario 	= mysqli_query($konexta,"SELECT * FROM login WHERE usu = '$nombre'");
$nr 			= mysqli_num_rows($queryusuario); 
$queryrut = mysqli_query($konexta,"SELECT * FROM login WHERE rut = '$miRut'");
$rn= mysqli_num_rows($queryrut); 
if ($nr == 0 && $rn==0)
{

	$pass_fuerte = password_hash($pass, PASSWORD_BCRYPT);
	
	$queryregistrar = "INSERT INTO login(usu, pass, nombre, rut, rol) values ('$nombre','$pass_fuerte','$nombre2','$miRut','$rol')";
	

if(mysqli_query($konexta,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $nombre2 RUT: $miRut');window.location= 'registrar.php' </script>";
}

}
else
{
		echo "<script> alert('Este correo está registrado o RUT registrado: $nombre RUT:$miRut');window.location= 'registrar.php' </script>";
}

} 
?>
