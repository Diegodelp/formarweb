<?php

session_start();

if(!isset($_SESSION['usuario']) ) {
    echo '
    <script>
        alert("Porfavor debes Iniciar Sesion");
        window.location = "../login";
    </script>
    ';
    session_destroy();
    die();
    }
?>
<!DOCTYPE html>
<html style="max-width: 100%; overflow-x: hidden;" lang="en">
<!-- Basic -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, minimum-scale=0.3, initial-scale=0.3">

  <!-- Site Metas -->
  <title>Aula Virtual-Formar</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Site Icons -->
  <link rel="shortcut icon" href="images/formarico.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Pogo Slider CSS -->
  <!-- Site CSS -->
  <link rel="stylesheet" href="css/styleav.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Desplegable -->
  <link rel="stylesheet" href="css/dropdown.css">
  <!-- Navar -->
  <link rel="stylesheet" href="css/navvar.css">
  <!-- AulaVirtual -->
  <link rel="stylesheet" href="css/aulavirtual.css">
  <!-- Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">  

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" style="position: relative; width:100%; max-width: 100%; overflow-x: hidden;" data-spy="scroll" data-target="#navbar-wd" oncontextmenu="return false;" data-offset="98">

  <!-- LOADER -->
  <div id="preloader">
    <div class="loader">
      <img src="images/loader.gif" alt="#" />
    </div>
  </div>
  <!-- end loader -->
  <!-- END LOADER -->

  <!-- Start header -->
  <header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="inicio"><img src="images/logoaula.png" alt="image"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
          <ul class="nav">
            <li><a class="nav-link active" href="inicio">Inicio</a></li>
            <li><a class="nav-link" href="acerca">Acerca</a></li>
            <li><a class="nav-link" href="contacto">Dudas</a>
            </li>
            <li><a class="nav-link" style="margin-left:25px;" href="cerrar_sesion_be"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->


  <!-- Section Aula -->
  <div>
    <div class="sidenav" style="position: fixed;">
      <form method="post" action="aulavirtual?inicio">
          <input style="background: none; border: none; color: white;" type="hidden" name="inicio" value="inicio">
          <input class="otrosbotones" style="background: none; border: none; font-size: 19px; margin: 6px;" type="submit" name="inicio" value="Inicio">
      </form>
      <form method="post" action="aulavirtual?usuario">
          <input style="background: none; border: none; color: white;" type="hidden" name="usuario" value="usuario">
          <input class="otrosbotones" style="background: none; border: none; font-size: 19px; margin: 6px;" type="submit" name="usuario" value="Usuario">
      </form>
      <?php
  if(isset($_SESSION['privilegios']))
  
  echo'
  <button class="dropdown-btn">Admin
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
  <form method="post" action="aulavirtual">
  <input class="curso" value="Alumnos" type="submit" name="infoalumnos" onclick="abrir()" style="margin: 10px; border-radius:10px;">
  <br>
  <input class="curso" value="Agregar Curso" type="submit" name="crearnewcurso" onclick="abrir()" style="margin: 10px; border-radius:10px;">
  <br>
  <input class="curso" value="Agregar Modulo" type="submit" name="crearnewmodulo" onclick="abrir()" style="margin: 10px; border-radius:10px;">
  <br>
  <input class="curso" value="Agregar Contenido" type="submit" name="crearnewcontenido" onclick="abrir()" style="margin: 10px; border-radius:10px;">
  <br>
  <input class="curso" value="Agregar Video" type="submit" name="crearnewvideo" onclick="abrir()" style="margin: 10px; border-radius:10px;">
  <br>
  <input class="curso" value="Agregar Archivo" type="submit" name="crearnewfile" onclick="abrir()" style="margin: 10px; border-radius:10px;">
  <br>
  <input class="curso" value="Cargar Pagos" type="submit" name="cargaralumno" onclick="abrir()" style="margin: 10px; border-radius:10px;">
  <br>
  <input class="curso" value="Actualizar Pagos" type="submit" name="actualizaralumno" onclick="abrir()" style="margin: 10px; border-radius:10px;">
  </form>
  </div>
  '
  ?>
      <button class="dropdown-btn">Ortodoncia
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        
          <?php
           $ortodoncia = "ortodoncia";
            if ($categoria['categoria'] = "$ortodoncia"){
          
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT id, nombre_curso, categoria FROM nombre_cursos WHERE categoria='$ortodoncia'");
                $query = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($sql);
                foreach ($sql as $values){
                    echo' <form method="post" action="aulavirtual?idcurso">
                        <input style="background: none; border: none; color: white;" type="hidden" name="idcurso" value="' . $values['id'] . '">
                        <input class="curso" type="submit" name="cursos" value="' . $values['nombre_curso'] . '">
                    </form> ';
                //echo '<li><a href="aulavirtual?idcurso=' . $values['id'] . '">' . $values['nombre_curso'] . '</a></li>';
                }
            }   
                ?>
        
      </div>


      <button class="dropdown-btn">Estetica
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <ul>
          <?php
           $estetica = "estetica";
            if ($categoria['categoria'] = "$estetica"){
          
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT id, nombre_curso, categoria FROM nombre_cursos WHERE categoria='$estetica'");
                $query = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($sql);
                foreach ($sql as $values){
                    echo' <form method="post" action="aulavirtual?idcurso">
                        <input style="border: none; color: white;" type="hidden" name="idcurso" value="' . $values['id'] . '">
                        <input class="curso" type="submit" name="cursos" value="' . $values['nombre_curso'] . '">
                    </form> ';
                //echo '<li><a href="aulavirtual?idcurso=' . $values['id'] . '">' . $values['nombre_curso'] . '</a></li>';
                }
            }   
                ?>
        </ul>
      </div>
      <button class="dropdown-btn">ATM
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <ul>
          <?php
           $atm = "atm";
            if ($categoria['categoria'] = "$atm"){
          
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT id, nombre_curso, categoria FROM nombre_cursos WHERE categoria='$atm'");
                $query = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($sql);
                foreach ($sql as $values){
                    echo' <form method="post" action="aulavirtual?idcurso">
                        <input style="border: none; color: white;" type="hidden" name="idcurso" value="' . $values['id'] . '">
                        <input class="curso" type="submit" name="cursos" value="' . $values['nombre_curso'] . '">
                    </form> ';
                }
            }   
                ?>
        </ul>
      </div>
      <button class="dropdown-btn">Prostodoncia
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <ul>
          <?php
           $prostodoncia = "prostodoncia";
            if ($categoria['categoria'] = "$prostodoncia"){
          
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT id, nombre_curso, categoria FROM nombre_cursos WHERE categoria='$prostodoncia'");
                $query = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($sql);
                foreach ($sql as $values){
                    echo' <form method="post" action="aulavirtual?idcurso">
                        <input style="border: none; color: white;" type="hidden" name="idcurso" value="' . $values['id'] . '">
                        <input class="curso" type="submit" name="cursos" value="' . $values['nombre_curso'] . '">
                    </form> ';
                }
            }   
                ?>
        </ul>
      </div>
      <button class="dropdown-btn">Implantologia
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <ul>
          <?php
           $implatologia = "implatologia";
            if ($categoria['categoria'] = "$implatologia"){
          
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT id, nombre_curso, categoria FROM nombre_cursos WHERE categoria='$implatologia'");
                $query = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($sql);
                foreach ($sql as $values){
                    echo' <form method="post" action="aulavirtual?idcurso">
                        <input style="border: none; color: white;" type="hidden" name="idcurso" value="' . $values['id'] . '">
                        <input class="curso" type="submit" name="cursos" value="' . $values['nombre_curso'] . '">
                    </form> ';
                }
            }   
                ?>
        </ul>
      </div>
      
    </div>

    <br>


    <div align="center" style="width: auto; margin-left: 180px;">
    <?php 
     
     if(isset($_GET["inicio"])){
        
        echo '<p>Bienvenido al aula virtual de FORMAR ' .$_SESSION['usuario']. '<p>';
        /*echo '
        <hr>
        <br>
        <button onclick="myFunction()" class="cursog"><i class="fab fa-youtube"></i> Videos Gratuitos</button>
        <div id="unoa" style="display:none"> 
        <br>
        <style> 
        .img-fluid {
            box-shadow: 0 1px 2px rgba(0,0,0,0.15);
            transition: box-shadow 0.3s ease-in-out;
            
        }
        .img-fluid:hover {
            box-shadow: 5px 5px 15px rgba(0,0,0,0.3);
            transition: all 0.3s ease-in-out;
            transform: scale(1.05, 1.05);
        .img-fluid:hover::after {
            opacity: 1;
        }    
        }
        </style>
        
        <!-- Grid row -->
<div class="row" style="width: 900px;">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>


            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="images/Banners.png" alt="video"
        data-toggle="modal" data-target="#modal1"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wTcNtgA6gHs"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="images/Banners.png" alt="video"
        data-toggle="modal" data-target="#modal6"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="images/Banners.png" alt="video"
        data-toggle="modal" data-target="#modal4"></a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="row" style="width: 900px;">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>


            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="images/Banners.png" alt="video"
        data-toggle="modal" data-target="#modal1"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wTcNtgA6gHs"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="images/Banners.png" alt="video"
        data-toggle="modal" data-target="#modal6"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="images/Banners.png" alt="video"
        data-toggle="modal" data-target="#modal4"></a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->


        </div>
        <br>

        
        
        
        
        ';*/
        
        }
     
    ?>
    
    <?php 
     
     if(isset($_POST["usuario"])){
        
        $sqlcursosvisibles = mysqli_query($conexion, "SELECT * FROM `nombre_cursos` AS nc INNER JOIN alumnos_pagados AS alpagados ON alpagados.tb_curso_id=nc.id INNER JOIN usuarios AS us ON us.usuario='Diegodelp' INNER JOIN nombre_modulos AS nm ON alpagados.tb_modulo_id=nm.id WHERE alpagados.status=1 ");
        $sqlusuario = mysqli_query($conexion, "SELECT * FROM `usuarios` AS us WHERE us.usuario='{$_SESSION['usuario']}'  ");
        $queryusuario = mysqli_query($conexion, $sqlusuario);
        $queryvisibles = mysqli_query($conexion, $sqlcursosvisibles);
        $rowusuario = mysqli_fetch_array($sqlusuario);  
        $rowvisible = mysqli_fetch_array($sqlcursosvisibles);  
         
         
         echo '
         <div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                        <img class="img-profile img-circle img-responsive center-block" src="'.$rowusuario['foto'].'" alt="">
                        <ul class="meta list list-unstyled">
                            <li class="name">'.$rowusuario['nombre_completo'].'
                                <label class="label label-info">Odontologo</label>
                            </li>
                            <li class="email"><a href="#">'.$rowusuario['correo'].'</a></li>
                        </ul>
                        <form class="form-horizontal" method="POST" action="cargarfotos_be.php" enctype="multipart/form-data">
                            <div class="form-group avatar">
                                <div style="max-width:100%" class="form-inline col-md-10 col-sm-9 col-xs-12">
                                    <input type="file" name="file" class="file-uploader pull-left">
                                    <br>
                                    <button type="submit" style="margin-left:-20px;" name="enviarfoto" class="btn btn-sm btn-default-alt pull-left">Cambiar Imagen</button>
                                </div>
                            </div>
                            </form>
                    </div>
                </div>
                <div class="content-panel">
                    
                            <fieldset class="fieldset">
                            <h3 class="fieldset-title">Informacion Personal</h3>
                            <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Usuario</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="'.$rowusuario['usuario'].'">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Nombre</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="'.$rowusuario['nombre_completo'].'">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Lugar de Nacimiento</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="'.$rowusuario['lnacimiento'].'">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">DNI</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="'.$rowusuario['dni'].'">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Fecha de Nacimiento</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="'.$rowusuario['fechanac'].'">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">Informacion de contacto</h3>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="email" class="form-control" value="'.$rowusuario['correo'].'">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Telefono</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="email" class="form-control" value="'.$rowusuario['telefono'].'">

                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-primary" type="submit" value="Actualizar Datos">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
    '; 
        
        }
     
    ?>
        
      <?php
                if(isset($_POST["idcurso"])){
                    
                   
                         

                    $sqlmodulosPagados = mysqli_query($conexion, "SELECT tb_modulo_id FROM alumnos_pagados WHERE tb_curso_id={$_POST["idcurso"]} AND tb_usuario_id='{$_SESSION['id']}' AND status=1");
                    $querymodulosPagados = mysqli_query($conexion, $sqlmodulosPagados);
                    $rowmodulosPagados = mysqli_fetch_array($sqlmodulosPagados);
                    $sqlprueba = mysqli_query($conexion, "SELECT * FROM `nombre_cursos` WHERE id={$_POST["idcurso"]}");
                    $queryprueba = mysqli_query($conexion, $sqlprueba);
                    $rowprueba = mysqli_fetch_array($sqlprueba);
                    
                    if(empty($rowmodulosPagados)){
                        echo '<h3>No has adquirido este curso todavia.</h3>';
                    }else
                    echo '<h3>Bienvenido al curso de ' .$rowprueba['nombre_curso'].'</h3>';
                    echo '<hr>';
                        
                                foreach ($sqlmodulosPagados as $valuesPagados){
                                      $sqlmodulos = mysqli_query($conexion, "SELECT * FROM nombre_modulos WHERE id={$valuesPagados["tb_modulo_id"]}");
                                      $querymodulos = mysqli_query($conexion, $sqlmodulos);
                                      $rowmodulos = mysqli_fetch_array($sqlmodulos);
                                      foreach($sqlmodulos AS $valueModulos){
                                       echo '   <form method="post" class="modulo" action="aulavirtual">
                                            <br>
                                          <input type="hidden" name="idmodulo" value="'.$valueModulos["id"].'">
                                          <input class="modulos" type="submit" name="verContenido" value="'.$valueModulos["nombre"].'">
                                          <input class="modulosm" type="image" alt="Submit" src="images/Banners.png" value="'.$valueModulos["nombre"].'">
                                          <br>
                                          </form>';
                                          //echo '<a href="aulavirtual?idmodulo='.$valueModulos["id"].'">'.$valueModulos["nombre"].'</a>';
                                      } 
                                 
                                
                                } 
                    
                }else if(isset($_POST["idmodulo"])){
                    
                    $sqlcontenido = mysqli_query($conexion, "SELECT * FROM contenido  WHERE tb_modulos_id={$_POST["idmodulo"]}");
                    $querycontenido = mysqli_query($conexion, $sqlcontenido);
                    $rowcontenido = mysqli_fetch_array($sqlcontenido);
                 
                            foreach ($sqlcontenido as $values){
                            
                             echo '<h2>' .$values['titulo'] .'</h2>';
                             echo '<div style="text-align: left; width: 800px;">
                             <p >' .$values['contenido'] .'</p>
                             </div>
                             ';
                             
                             $sqlvideos = mysqli_query($conexion, "SELECT * FROM videos_modulo WHERE tb_modulo_id={$_POST["idmodulo"]}");
                             $quertvideos = mysqli_query($conexion, $sqlvideos);
                             $rowvideos = mysqli_fetch_array($sqlvideos);


                            } 
                                if (isset($rowvideos['tb_modulo_id'])){
                                echo '<br>';
                                 echo "<video width='720' height='auto' style='margin-bottom: 150px;' oncontextmenu='return false;' controls=''><source src='{$rowvideos['ubicacion']}' type='video/mp4'></video>";
                                 echo '<br>';
                                
                             } 
                             
                             $sqlarchivos = mysqli_query($conexion, "SELECT * FROM archivos_modulo WHERE tb_modulo_id={$_POST["idmodulo"]}");
                             $quertarchivos = mysqli_query($conexion, $sqlarchivos);
                             $rowarchivos = mysqli_fetch_array($sqlarchivos);
                             if (isset($rowarchivos['tb_modulo_id'])) {
                                 echo "<label style='color: black;'>Archivos del Modulo: </label><a href='{$rowarchivos['ubicacion']}'> {$rowarchivos['nombre']}</a>";
                                 
                             }
                    } else 
        

                        
                    
                        
                ?>

    <?php
    
    if(isset($_POST["crearnewcurso"])){
                        include 'cargarcurso.php';
                    }else if (isset($_POST["crearnewmodulo"])){
                        include 'cargarmodulo.php';
                    }else if (isset($_POST["crearnewcontenido"])){
                        include 'cargarcontenido.php';
                    }else if (isset($_POST["cargaralumno"])){    
                        include 'cargarpagos.php';
                    } else if (isset($_POST["actualizaralumno"])){    
                        include 'actualizarpagos.php';
                    } else if (isset($_POST["crearnewvideo"])){    
                        include 'cargarvideos.php';
                    } else if (isset($_POST["crearnewfile"])){
                        include 'cargararchivos.php';
                    } else if (isset($_POST["infoalumnos"])){
                        include 'infoalumnos.php';
                    }
                    
    ?>
      
      
                    

       
    </div>

  </div>
  <!-- End Aula -->

  <br>
  <br>
  <br>
  <br>
  <br>


  <!-- End Footer -->
  <div class="footer_bottom" style="background-color: #7ba4e3; width:100%; position:fixed; bottom:0; z-index:999999;">
    <div class="container">
      <div class="row">
        <div class="col-12" style="margin-left: 200px;">
          <p class="crp" style="color: white;">© 2020 Formar . All Rights Reserved.</p>
          <br>
          <p class="crp"><a href="https://www.instagram.com/belottidiego/" style="color: #fff; font-size: 18px;" target="_blank">>Diseño Digital y Web<</a>
          </p>
          <ul class="bottom_menu">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ALL JS FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.pogo-slider.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/images-loded.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/dropdown.js"></script>
  <script src="js/agregaraula.js"></script>
  <script src="js/hideshow.js"></script>
    <script src="js/videoslider.js"></script>
</body>

</html>
