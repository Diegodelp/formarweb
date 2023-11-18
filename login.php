<!doctype html>
<?php 

session_start();
 
include 'conexion_be.php';
if(isset($_SESSION['usuario']) || isset($_SESSION['privilegios']) ){
    header("location: ../aulavirtual");
}
?>
<html lang="en">
<head><meta charset="euc-jp">
    
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=0.3">
    
    <title>Login-Formar</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/formarico.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/stylea.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Desplegable -->
    <link rel="stylesheet" href="css/dropdown.css">
    <!-- Navar -->
    <link rel="stylesheet" href="css/navvar.css">
        <!-- Aulavirtual -->
    <link rel="stylesheet" href="css/aulavirtual.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
    	<!-- LOADER -->
    <div id="preloader">
		<div class="loader">
			<img src="images/loader.gif" alt="#"/>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

	
	<div style="text-align: center; padding-top:50px; border-bottom: 2px solid #7ba4e3; margin-bottom: 50px; background-color:#7ba4e3; box-shadow: 2px 2px 2px 2px #8e8e8e">
	    <p class="large"></p><h2> Login de Usuarios - FORMAR </h2></p>
	</div>
	<div class="container" style="margin:auto; width: auto;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" style="padding: 40px" align="center">
				<a href="index"><img src="images/logo.png" alt="#" /></a>
				<br>


				<form style="margin: auto;" method="POST" action="login_usuariopago_be" enctype="multipart/form-data">
				    <input type="hidden" name="inicio">
				    <input class="login" required="" data-error="Porfavor ingresa un Usuario" name="usuario" type="text" placeholder="Usuario"><br>
					<input class="login" required="" data-error="Porfavor ingresa una Contraseña" type="password" name="clave" placeholder="Contraseña"><br><br>
					<input class="loginbtn" type="submit" name="login" value="Login" style="">
					
				</form>
				<br>
				<a style="font-size: 15px;" href="registro">Aun no tenes usuario? Registrate aqui!</a>
			</div>
		</div>
	</div>
	<br>
		<br>
			<br>
				<br>

	 
	
		<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>













