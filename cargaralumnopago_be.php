<?php 

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$cursoid = $_POST['cursos'];
$moduloid = $_POST['modulo'];
$estado = $_POST['estado'];

$query = "INSERT INTO alumnos_pagados(tb_usuario_id, tb_curso_id, tb_modulo_id, status)
			VALUES('$nombre', '$cursoid', '$moduloid', '$estado')";
			

$cargaexito = mysqli_query($conexion, $query);

if ($cargaexito) {
    echo '
    <script> 
    alert ("Pago Cargado Correctamente");
    window.location = "../aulavirtual.php"
    </script>
    ';
}

mysqli_close($conexion);

?>