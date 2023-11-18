<?php 

include 'conexion_be.php';

$hoy = date("Y-m-d");
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$fechanac = $_POST['fechadenacimiento'];
$dni = $_POST['dni'];
$ciudadania = $_POST['ciudadania'];
$lresidencia = $_POST['lugarderesidencia'];
$direccion = $_POST['direccion'];
$arecibido = $_POST['añorecibido'];
$lnacimiento = $_POST['lugardenacimiento'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['clave'];
$contrasena = hash('sha512', $contrasena);
$telefono = $_POST['telefono'];

$query = "INSERT INTO usuarios(nombre_completo, correo, telefono, usuario, clave, lnacimiento, dni, direccion, fechanac, lresidencia, ciudadania, arecibido, fecha_registro)
			VALUES('$nombre_completo', '$correo', '$telefono', '$usuario', '$contrasena', '$lnacimiento', '$dni', '$direccion', '$fechanac', '$lresidencia', '$ciudadania', '$arecibido', '$hoy')";
			
$verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_email) > 0){
    echo '
    <script> 
    alert("Este correo ya esta en uso");
    window.location = "../registro.php";
    </script>
    ';
    exit();
}	

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script> 
    alert("Este usuario ya esta en uso");
    window.location = "../registro.php";
    </script>
    ';
    exit();
}	
		
	
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script> 
    alert ("Usuario Registrado Correctamente");
    window.location = "../login.php"
    </script>
    ';
}

$EmailTo = "$correo";
$Subject = "Email de Registro-FORMAR";
$email = "formar.ortodoncia@gmail.com";

// prepare email body text
$Body .= "Muchas gracias por elegirnos, tu usuario ha sido registrado satisfactoriamente. Atentamente Equipo Formar.";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

$to = "diegodelp22@gmail.com, formar.ortodoncia@gmail.com";
$subject = "Usuario Registrado - FORMAR";
$txt = "$nombre_completo se ha registrado en el aula virtual. Corroborar si necesita activacion de algun curso.";
$headers = "From: formar.ortodoncia@gmail.com" . "\r\n";


mail($to,$subject,$txt,$headers);

mysqli_close($conexion);

?>