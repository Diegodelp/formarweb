<?php

session_start();

if(!isset($_SESSION['curso2o'])){
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
        <p style="float: right; margin-left: 20px; margin-top:-70px; vertical-align: center;">
            <img src="images/bracketdespegado.png"/> 
       
        </p> 
        <div style=" margin-right: 50px; height:auto;"><b>A.</b> Cuando un bracket se despego dentro del perimetro del arco, debes mantenerlo en la posicion y recubrir el mismo con <b>cera de ortodoncia.</b>  
        <br>
            <b>B.</b> En caso contrario si el inconveniente es en el final del arco, puedes removerlo y cubrir el alambre remanente con <b>cera de ortodoncia.</b>
            <br>
            <b>C.</b> Si el bracket se despego de manera parcial, mantenlo en la posicion cuidadosamente.
            <br>
            <br>
            >En estos casos, debes realizar el pedido de un turno con nosotros lo antes posible.
            </b>
            
        </div>
  
    </div>
    <div class="uno" onselectstart="return false" onclick="myFunctiona() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
        <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 2 </div>
    </div>
    <div class="dosa" style="display: none; margin-right: 850px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="dosa">
        <p style="float: right; margin-left: 20px; margin-top:-70px; vertical-align: center;">
            <img src="images/cerabracket.png"/ width="120%"> 
       
        </p> 
        <div style=" margin-right: 50px; height:auto;"><b>A.</b> La cera de ortodoncia es un material blando que viene en formato de barra dentro de una pequeña caja. Esta cera no es tóxica, por lo que es compatible con el organismo. La cera se aplica sobre los distintos aparatos de ortodoncia que sobresalen de los dientes, como pueden ser los brackets, arcos o bandas metálicas.</b>  
        <br>
            Ademas esta puede ser utilizada en caso de despego de brackets o lesiones post-traumaticas.</b>
        </div>
  
    </div>
       <div class="uno" onselectstart="return false" onclick="myFunctionb() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
        <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 3 </div>
    </div>
    <div class="tresa" style="display: none; margin-right: 700px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="tresa">
        <p style="float: right; margin-left: 20px; margin-top:-70px; vertical-align: center;">
            <img src="images/dolor.png"/ width="70%"> 
       
        </p> 
        <div style=" margin-right: 50px; height:auto;"><b>A.</b> Corrobora si el arco esta correctamente insertado en el bracket.</b>  
        <br>
           <b>B.</b> Corrobora si muerdes correctamente o no hay ninguna interferencia al hacerlo.</b>
           <br>
           <b>C.</b> Evalua si durante el dia has notado tension en los musculos de tu cara y de la boca especificamente.</b>
         <br> <b>D.</b> Es esperable una molestia leve, si te has realizado una activacion recientemente o has cambiado el tamaño del arco.  
        </div>
  
    </div>
    <div class="uno" onselectstart="return false" onclick="myFunctionc() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
       <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 4 </div>
    </div>
    <div class="cuatroa" style="display: none; margin-right: 700px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="cuatroa">
        <p style="float: right; margin-left: 20px; margin-top:-70px; vertical-align: center;">
         
       
        </p> 
        <div style=" margin-right: 50px; height:auto;"> La aparatologia ortodóncica no deben generar ninguna lesion en la mucosa oral.</b>  
        <br>
        <br>
           <b>A.</b> Coloca <b>cera de ortodoncia</b> en el sitio de la lesion.</b>
           <br>
           <br>
           <b>B.</b>En el caso de que la lesion persista luego de haber aplicado la solucion "A" <a href="contact">contactanos</a> .</b>
         <br>   
        </div>
 
    </div>
       <div class="uno" onselectstart="return false" onclick="myFunctiond() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
        <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 5 </div>
    </div>
    <div class="cincoa" style="display: none; margin-right: 700px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="cincoa">
        <p style="float: right; margin-left: 20px; margin-top:-70px; vertical-align: center;">
            
       
        </p> 
        <div style=" margin-right: 50px; height:auto;"> El arco al iniciar el tratamiento, puede comenzar a dejar extremos que lastimen o lesionen la mucosa oral.</b>  
        <br>
        <br>
           <b>A.</b> Coloca una proteccion <b>cera ortodóncica</b> en el extremo del alambre</b>
           <br>
           <br>
           <b>B.</b>Intente deslizar el alambre hacia el lado opuesto donde tiene la molestia.</b>
         <br>  
         <br>
         <b>C.</b>Corta el alambre en el sector anterior y desliza la seccion que te esta molestando.</b>
        </div>
 
    </div>
    <div class="uno" onselectstart="return false" onclick="myFunctione() "id="uno" style="background-color: #606e7d; font-size: 18px; color: white; margin-bottom: 10px; padding: 10px;">
        <div style="margin-left: 50px;"><img src="images/formarico.png" alt="#" width="40px"/>>Unidad 6 </div>
    </div>
    <div class="seisa" style="display: none; margin-right: 700px; margin-left: 130px; margin-top: 50px; margin-bottom: 50px; height: auto;" id="seisa">
        <p style="float: right; margin-left: 20px; margin-top:-70px; vertical-align: center;">
            
       
        </p> 
        <div style=" margin-right: 50px; height:auto;"> El arco al iniciar el tratamiento, puede comenzar a dejar extremos que lastimen o lesionen la mucosa oral.</b>  
        <br>
        <br>
           <b>A.</b> Coloca una proteccion <b>cera ortodóncica</b> en el extremo del alambre</b>
           <br>
           <br>
           <b>B.</b>Intente deslizar el alambre hacia el lado opuesto donde tiene la molestia.</b>
         <br>  
         <br>
         <b>C.</b>Corta el alambre en el sector anterior y desliza la seccion que te esta molestando.</b>
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