<?php 
session_start();
include 'conexion_be.php';

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$curso = $_POST['curso'];
$modulo = $_POST['modulo'];

$query = "INSERT INTO contenido(tb_cursos_id, tb_modulos_id,titulo, contenido)
			VALUES('$curso', '$modulo', '$titulo', '$contenido')";
			

$cargaexito = mysqli_query($conexion, $query);

if ($cargaexito) {
    echo '
    <script> 
    alert ("Contenido Cargado Correctamente");
    window.location = "../aulavirtual.php"
    </script>
    ';
}

mysqli_close($conexion);

?>