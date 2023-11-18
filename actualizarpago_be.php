<?php 

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$moduloid = $_POST['modulo'];
$estado = $_POST['estado'];

$query = "UPDATE alumnos_pagados SET status='$estado' WHERE tb_usuario_id='$nombre' AND tb_modulo_id='$moduloid'";
		

$cargaexito = mysqli_query($conexion, $query);

if ($cargaexito) {
    echo '
    <script> 
    alert ("Datos Cargados Correctamente");
    window.location = "../aulavirtual"
    </script>
    ';
}

mysqli_close($conexion);

?>