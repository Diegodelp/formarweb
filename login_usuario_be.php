<?php 

session_start();
 
include 'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['clave'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$contrasena' ");

if(mysqli_num_rows($validar_login) > 0){
	$_SESSION['usuario'] = $usuario;
	header("location: ../imp.php");
	exit();
}else{
	echo '
	<script>
	alert("Usuario no encontrados");
	window.location = "../login.php";
	</script>
	';
	exit();
}

?>