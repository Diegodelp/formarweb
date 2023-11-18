<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=0.3">
    
    <title>Enviar Consulta-Formar</title>

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
	    <p class="large"></p><h2> Registro de Usuarios - FORMAR </h2></p>
	</div>
	<div class="container" style="margin:auto; width: auto;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<a href="index"><img src="images/logo.png" alt="#" /></a>
				<br>

				<form style="margin: auto;" method="POST" action="registro_usuario_be.php" enctype="multipart/form-data">
				    <input class="login1" required="" data-error="Porfavor ingresa tu Nombre Completo" type="text" placeholder="Nombre Completo" name="nombre_completo" tabindex="1"><br>
					<input class="login1" required="" data-error="Porfavor ingresa tu Email" type="email" name="correo" type="text" placeholder="Correo"><br>
					<input class="login1" required="" data-error="Porfavor ingresa tu Celular" type="text" name="telefono" type="text" placeholder="Telefono"><br>
					<input class="login1" required="" data-error="Porfavor ingresa un Usuario" name="usuario" type="text" placeholder="Usuario"><br>
					<input class="login1" required="" data-error="Porfavor ingresa una Contraseña" type="password" name="clave" placeholder="Contraseña"><br>
					<input class="login1" required="" data-error="Porfavor su DNI" type="text" name="dni" placeholder="DNI"><br>
					<input class="login1" required="" data-error="Porfavor ingresa su Direccion" type="text" name="direccion" placeholder="Direccion"><br>
					<input class="login1" required="" data-error="Porfavor ingresa tu Fecha de Nacimiento" type="text" name="fechadenacimiento" placeholder="Fecha de Nacimiento">
					<input class="login1" required="" data-error="Porfavor ingresa tu Ciudadania" type="text" name="ciudadania" placeholder="Ciudadania"><br>
					<input class="login1" required="" data-error="Porfavor ingresa Lugar de Nacimiento" type="text" name="lugardenacimiento" placeholder="Lugar de Nacimiento"><br>
					<input class="login1" required="" data-error="Porfavor ingresa Lugar de Residencia" type="text" name="lugarderesidencia" placeholder="Lugar de Residencia"><br>
					<input class="login1" required="" data-error="Porfavor ingresa tu Año de Recibido" type="text" name="añorecibido" placeholder="Año de Recibido" ><br><br>
					<button class="loginbtn" placeholder="Registrarse">Registrarse</button>
				</form>
				<br>
				<a style="font-size: 15px;" href="registro">Ya tenes usuario? Ingresa aqui!</a>
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













