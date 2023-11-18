<?php
session_start();
include 'conexion_be.php';

 if(isset($_POST["enviarfoto"])){
     
       $maxsizev = 82428800; // 50MB
                      
 
       $namev = $_FILES['file']['name'];
       $extv = $_FILES['file']['type'];
       $sizev = $_FILES['file']['size'];
       $target_dirv = "/home/fhh5z4icmupb/public_html/fotosusuarios/";
       $dirtf = 'fotosusuarios/'.$_FILES['file']['name'];
       $uploadfilev = $target_dirv . basename($_FILES['file']['name']);
       if(is_uploaded_file($_FILES['file']['tmp_name'])){
          if(!file_exists($target_dirv)){
              mkdir($target_dirv,0777,true);
          }
          $queryc = mysqli_query($conexion, "SELECT foto FROM usuarios WHERE usuario='{$_SESSION['usuario']}' ");
          if(!empty($queryc)){
          $queryi = "UPDATE usuarios SET foto='$dirtf' WHERE usuario='{$_SESSION['usuario']}' ";
                                
                          mysqli_query($conexion ,$queryi);
                          
          } 
          if($_FILES['file']['type'] == 'image/jpg' || $_FILES['file']['type'] == 'image/png' || $_FILES['file']['type'] == 'image/jpeg' || $_FILES['file']['type'] == 'image/JPG'){
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
} else echo  print_r($_POST["enviarfoto"]); 'No Funciona el Boton' ;
?>