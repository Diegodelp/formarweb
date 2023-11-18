<?php 

include 'conexion_be.php';

$nombre_curso = $_POST['nombre_curso'];
$categoria = $_POST['categorias'];
$precio = $_POST['precio'];

 if(isset($_POST["enviarfoto"])){

$maxsizev = 82428800; // 50MB
                      
       $namev = $_FILES['file']['name'];
       $extv = $_FILES['file']['type'];
       $sizev = $_FILES['file']['size'];
       $target_dirv = "/home/fhh5z4icmupb/public_html/fotos_cursos/";
       $dirtf = 'fotos_cursos/'.$_FILES['file']['name'];
       $uploadfilev = $target_dirv . basename($_FILES['file']['name']);
       if(is_uploaded_file($_FILES['file']['tmp_name'])){
          if(!file_exists($target_dirv)){
              mkdir($target_dirv,0777,true);
          }
                
          if($_FILES['file']['type'] == 'image/jpg' || $_FILES['file']['type'] == 'image/png' || $_FILES['file']['type'] == 'image/jpeg'){
              $origen = $_FILES['file']['tmp_name'];
              $destino = $target_dirv.basename($_FILES['file']['name']);
              if(move_uploaded_file($origen,$destino)){
                   // Insert record
                         header("Location:aulavirtual");
              }
          }else{
              echo 'la foto no cumple con los parametros correctos.';
          }
      }
 }

$query = "INSERT INTO nombre_cursos(nombre_curso, categoria, foto_curso, precio)
			VALUES('$nombre_curso' , '$categoria', '$dirtf', '$precio')";
			
$verificar_curso = mysqli_query($conexion, "SELECT * FROM nombre_cursos WHERE nombre_curso='$nombre_curso' ");

if(mysqli_num_rows($verificar_curso) > 0){
    echo '
    <script> 
    alert("Este curso ya esta agregado");
    window.location = "../aulavirtual";
    </script>
    ';
    exit();
}	

$cargaexito = mysqli_query($conexion, $query);

if ($cargaexito) {
    echo '
    <script> 
    alert ("Curso Cargado Correctamente");
    window.location = "../aulavirtual"
    </script>
    ';
}



mysqli_close($conexion);

?>