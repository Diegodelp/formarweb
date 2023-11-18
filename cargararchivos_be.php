<?php

include 'conexion_be.php';

 if(isset($_POST["enviararchivos"])){
     
       $maxsizea = 52428800; // 50MB
                      
 
       $namea = $_FILES['file']['name'];
       $exta = $_FILES['file']['type'];
       $sizea = $_FILES['file']['size'];
       $target_dira = "archivos_curso/";
       $uploadfilea = $target_dira . basename($_FILES['file']['name']);
       $moduloida = $_POST['moduloa'];


            if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != "") {    
               // Check extension
                       if( $_FILES['file']['type'] = 'application/x-zip-compressed'){

                          // Check file size
                                  if(($_FILES['file']['size'] >= $maxsizea) || ($_FILES["file"]["size"] == 0)) {
                                    echo "El archivo es demasiado grande. Solo archivos de 50MB";
                        
                                  }else
                                    // Upload
                                            if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfilea)){
                                              // Insert record
                                              
                                
                                              echo "Subido Correctamente.";
                                            } else echo 'No se subio el archivo';
                                          
                        
                       }else
                          echo "Invalid file extension.";
                       
         
            } else echo 'No existe el archivo';
} else echo 'No Funciona el Boton';
                             $query = "INSERT INTO archivos_modulo (tb_modulo_id, nombre, ubicacion, ext, size)
                                			                VALUES('$moduloida', '$namea', '$uploadfilea', '$exta', '$sizea')";

$cargaexito = mysqli_query($conexion, $query);

if ($cargaexito) {
    echo '
    <script> 
    alert ("Curso Cargado Correctamente");
    window.location = "../aulavirtual"
    </script>
    ';
}
