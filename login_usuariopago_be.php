<?php 

session_start();
 
include 'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['clave'];
$administrador = "admin";
$turno = "vip";
$contrasena = hash('sha512', $contrasena);
if(isset($_POST["login"])){
   if(!empty($_POST["usuario"]) && !empty($_POST["clave"])){ 
        $sqllogin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='{$_POST['usuario']}'");
        $querylogin = mysqli_query($conexion, $sqllogin);
        $rowlogin = mysqli_fetch_array($sqllogin);
        if($rowlogin["clave"] == $contrasena){
            $_SESSION["id"]=$rowlogin["id"]; 
            $_SESSION["usuario"]=$rowlogin["usuario"];
            if ($rowlogin['privilegios'] == $administrador) {
            $_SESSION["id"]=$rowlogin["id"]; 
            $_SESSION["usuario"]=$rowlogin["usuario"];    
            $_SESSION["privilegios"]=$administrador;}
            header("location: ../aulavirtual?inicio");
        } else
	echo '
	<script>
	alert("Usuario no Registrado");
	window.location = "../login.php";
	</script>
	';
	exit();
    } 

}

/*

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$contrasena' ");
$validar_admin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$contrasena' and privilegios='$administrador' ");
$queryadmin = mysqli_query($conexion, $validar_admin);
$arrayadmin = mysqli_fetch_array($validar_admin);

if(mysqli_num_rows($validar_admin) > 0){
	$_SESSION['privilegios'] = $administrador;
	$_SESSION['usuario'] = $usuario;
	    if ($validar_admin['clave'] == $contraseña){
	        
	        $_SESSION['id']=$arraylogin["id"];
	    }
	header("location: ../aulavirtual");
	exit();
}else if (mysqli_num_rows($validar_login) > 0){
	$_SESSION['usuario'] = $usuario;

	header("location: ../aulavirtual");
	exit();
}else{
	echo '
	<script>
	alert("Usuario no Registrado");
	window.location = "../login.php";
	</script>
	';
	exit();
}
*/
?>