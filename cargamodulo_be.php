<?php 

include 'conexion_be.php';

$nombre_modulo = $_POST['nombre_modulo'];
$fecha = $_POST['fecha'];
$curso = $_POST['curso'];

$query = "INSERT INTO nombre_modulos(tabla_cursos_id, nombre, fecha_de_inicio)
			VALUES('$curso', '$nombre_modulo', '$fecha')";
			

$cargaexito = mysqli_query($conexion, $query);

if ($cargaexito) {
    echo '
    <script> 
    alert ("Modulo Cargado Correctamente");
    window.location = "../aulavirtual.php"
    </script>
    ';
}

mysqli_close($conexion);

?>