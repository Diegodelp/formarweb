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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    
    
    <div id="uno">
        Hola soy el contenidoHola soy el contenidoHola soy el contenidoHola soy el contenidoHola soy el contenidoHola soy el contenidoHola soy el contenido
    </div>

    
    


    
    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
</body>

</html>