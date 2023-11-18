<?php

session_start();

if(!isset($_SESSION['curso1o']) ) {
    echo '
    <script>
        alert("Debe adquirir el curso para visualizar el contenido.");
    </script>
    ';
    session_destroy();
    die();
    }
?>

<!DOCTYPE html>

<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=0.3">

    <!-- Site Metas -->
    <title>Cursos Presenciales-Formar</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/formarico.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/stylei.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Desplegable -->
    <link rel="stylesheet" href="css/dropdown.css">
    <!-- Navar -->
    <link rel="stylesheet" href="css/navvar.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->


    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span> CURSO MODULAR VIRTUAL : DIAGNOSTICO y PLANIFICACION</h2>
                            <p class="large">Formar-Virtual</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section -->

    <div class="curso1" onselectstart="return false" onclick="curso1()" id="curso1">
    <div class="uno" onselectstart="return false" onclick="myFunction() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
         <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 1 </div>
    </div>
    <div class="unoa" style="display: none; margin-right: 800px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="unoa">
        
                 
  
    </div>
    <div class="uno" onselectstart="return false" onclick="myFunctiona() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
        <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 2 </div>
    </div>
    <div class="dosa" style="display: none; margin-right: 850px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="dosa">
        
            <div class="main" id="curso1" style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;  overflow: -moz-scrollbars-none; display: none;">
                <iframe frameborder="0" framespacing="0" scrolling="auto" border="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; margin-top: -30px; padding-right: 110px;" src="diagnosticoyplanificacion1.php"></iframe>
            </div>        
  
    </div>
       <div class="uno" onselectstart="return false" onclick="myFunctionb() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
        <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 3 </div>
    </div>
    <div class="tresa" style="display: none; margin-right: 700px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="tresa">
        
            <div class="main" id="curso1" style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;  overflow: -moz-scrollbars-none; display: none;">
                <iframe frameborder="0" framespacing="0" scrolling="auto" border="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; margin-top: -30px; padding-right: 110px;" src="diagnosticoyplanificacion1.php"></iframe>
            </div>        
  
    </div>
    <div class="uno" onselectstart="return false" onclick="myFunctionc() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
       <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 4 </div>
    </div>
    <div class="cuatroa" style="display: none; margin-right: 700px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="cuatroa">
         
            <div class="main" id="curso1" style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;  overflow: -moz-scrollbars-none; display: none;">
                <iframe frameborder="0" framespacing="0" scrolling="auto" border="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; margin-top: -30px; padding-right: 110px;" src="diagnosticoyplanificacion1.php"></iframe>
            </div>        
 
    </div>
       <div class="uno" onselectstart="return false" onclick="myFunctiond() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
        <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 5 </div>
    </div>
    <div class="cincoa" style="display: none; margin-right: 700px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="cincoa">
        
            <div class="main" id="curso1" style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;  overflow: -moz-scrollbars-none; display: none;">
                <iframe frameborder="0" framespacing="0" scrolling="auto" border="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; margin-top: -30px; padding-right: 110px;" src="diagnosticoyplanificacion1.php"></iframe>
            </div>       
 
    </div>
    <div class="uno" onselectstart="return false" onclick="myFunctione() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
        <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 6 </div>
    </div>
    <div class="seisa" style="display: none; margin-right: 700px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="seisa">
        
            <div class="main" id="curso1" style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;  overflow: -moz-scrollbars-none; display: none;">
                <iframe frameborder="0" framespacing="0" scrolling="auto" border="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; margin-top: -30px; padding-right: 110px;" src="diagnosticoyplanificacion1.php"></iframe>
            </div>       
 
    </div>
    </div>
    
                <a href="#" style="margin-right: 150px;" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>


    


    
    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-scripti.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/hideshow.js"></script>
</body>

</html>