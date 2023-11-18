<?php

include 'conexion_be.php';

 if(isset($_POST["enviarvideos"])){
     
       $maxsizev = 82428800; // 50MB
                      
 
       $namev = $_FILES['file']['name'];
       $extv = $_FILES['file']['type'];
       $sizev = $_FILES['file']['size'];
       $target_dirv = "/home/fhh5z4icmupb/public_html/videos_curso/";
       $dirtv = 'videos_curso/'.$_FILES['file']['name'];
       $uploadfilev = $target_dirv . basename($_FILES['file']['name']);
       $moduloidv = $_POST['modulov'];

          $queryv = "INSERT INTO videos_modulo(tb_modulo_id, nombre, ubicacion, ext, size)
                                	VALUES('$moduloidv', '$namev', '$dirtv', '$extv', '$sizev')";
                                
                         $cargaexito = mysqli_query($conexion ,$queryv);
                          
                          if ($cargaexito) {
                    echo '
                    <script> 
                    alert ("Contenido Cargado Correctamente");
                    window.location = "../aulavirtual.php"
                    </script>
                    ';
                }
          
      
       
       
       
       
       
       
       
       
       
            /*
            if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != "") {    
               // Check extension
                       if( $_FILES['file']['type'] = 'video/mp4'){
                        
                          // Check file size
                                  if(($_FILES['file']['size'] >= $maxsizev) || ($_FILES["file"]["size"] == 0)) {
                                    echo "El archivo es demasiado grande. Solo archivos de 50MB";
                        
                                  }else{
                                      // Upload
                                            if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfilev)){
                                              // Insert record
                                              $queryv = "INSERT INTO videos_modulo(tb_modulo_id, nombre, ubicacion, ext, size)
                                			                VALUES('$moduloidv', '$namev', '$uploadfilev', '$extv', '$sizev')";
                                
                                              mysqli_query($conexion ,$queryv);
                                              echo "Subido Correctamente.";
                                            } else echo 'No se subio el archivo';
                                  }
                                    
                                          
                        
                       }else
                          echo "Invalid file extension.";
                       
         
            } else echo 'No existe el archivo';*/
} else{ echo 'No Funciona el Boton';}
?>
     