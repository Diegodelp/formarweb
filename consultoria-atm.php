<?php
    $msg = "";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/src/PHPMailer.php";
	include_once "PHPMailer/src/Exception.php";
	include_once "PHPMailer/src/SMTP.php";

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$prof = $_POST['prof'];
		$pac = $_POST['pac'];
		$message = $_POST['message'];
		

		if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
			$file = "attachment/" . basename($_FILES['attachment']['name']);
			move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
		} else
			$file = "Usted debe cargar los archivos para realizar la consulta";
			
			
		$mail = new PHPMailer();

		//if we want to send via SMTP
		$mail->Host = "localhost";
		//$mail->isSMTP();
		$mail->SMTPDebug  = 2;
		$mail->SMTPAuth = true;
		$mail->Username = "consultas@formarodontologia.com";
		$mail->Password = "=l?TdSVSz0So";
		$mail->SMTPSecure = "ssl"; //TLS
		$mail->Port = 465; //587

		$mail->addAddress('robertoargoitia@gmail.com');
		$mail->addAddress('diegodelp22@gmail.com');
		$mail->addAddress('formar.ortodoncia@gmail.com');
		$mail->setFrom($email);
		$mail->Subject = 'FORMAR-Consulta Recibida';
		$mail->isHTML(true);
		$mail->Body = <<<EOT
		<br>
		<img src="http://formarodontologia.com/images/logo.png"><br><br>
<b>Email:</b> {$_POST['email']}
<br>
<b>Paciente:</b> {$_POST['pac']}
<br>
<b>Profesional:</b> {$_POST['prof']}</b>
<br>
<b>Message:</b> {$_POST['message']}
EOT;


		$mail->addAttachment($file);

		if ($mail->send())
		    $msg = "El mail ha sido enviado, Estaremos en Contacto!";
		else
		    $msg = "Intente Nuevamente!";

		unlink($file);
	}
?>
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

	 <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="inicio"><img src="images/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="nav">
                        <li><a class="nav-link active" href="inicio">Inicio</a></li>
                        <li><a class="nav-link" href="acerca">Acerca</a></li>
 			<li><a href="#">Cursos</a>
				<ul style="border-radius: 10px;">
					<li><a href="#">Ortodoncia y Ortopedia</a>
						<ul style="border-radius: 10px;">
							<li><a href="ortodoncia-online">Online</a></li>
							<li><a href="ortodoncia">Presenciales</a></li>
						</ul>
					</li>
					<li><a href="#">Articulacion Temporo-Mandibular</a>
						<ul style="border-radius: 10px;">
							<li><a href="#">Online</a></li>
							<li><a href="atm">Presenciales</a></li>
						</ul>
					</li>
					<li><a href="#">Estética</a>
						<ul style="border-radius: 10px;">
							<li><a href="estetica-online">Online</a></li>
							<li><a href="estetica">Presenciales</a></li>
						</ul>
					</li>
				</ul>
			</li>
                        <li><a class="nav-link" href="#">Consultorias y Mentorias</a>
                        <ul style="border-radius: 10px;">
					<li><a href="consultorias-mentorias-ortodoncia">Ortodoncia y Ortopedia</a></li>
					<li><a href="consultorias-mentorias-atm">Articulacion Temporo-Mandibular</a></li>
				</ul>
                        </li>
                        <li><a class="nav-link" href="ayuda">Ayuda</a>
  
                        </li>
			<li><a class="nav-link" href="contact">Contactanos</a></li> 
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	
	<div style="text-align: center; padding-top:50px; border-bottom: 2px solid black; margin-left: 70px; margin-right: 70px; margin-bottom: 50px;">
	    <p class="large"></p><h2> Consultorias y Mentorias - FORMAR </h2></p>
	</div>
	<div class="container" style="margin:auto; width: auto;">
		<div class="row justify-content-left">
			<div class="col-md-6 col-md-offset-3" align="center">
				<a href="index"><img src="images/logo.png" alt="#" /></a>
				<br>

                <?php if ($msg != "") echo "$msg<br><br>"; ?>

				<form method="post" action="consultoria-atm" enctype="multipart/form-data">
				    <input placeholder="Email..." name="email" type="email" tabindex="1" style="color: black; border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%;"><br>
					<input name="pac" type="text" placeholder="Paciete..." style="border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%"><br>
					<input name="prof" type="text" placeholder="Profesional..." style="border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%"><br>
					<textarea placeholder="Mensaje..." name="message" style="border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%"></textarea><br>
					<input type="file" name="attachment" style="border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%"><br><br>
					<input class="btn1" name="submit" type="submit" value="Enviar Email">
				</form>
			</div>
		</div>

		<div style="background-color: white; width: 450px; ; border-radius: 5px; margin-left: 500px; margin-top:-450px;">
		    <h3 style="text-align: center; background-color: #751d2b; color: white; padding-top: 10px; border-radius: 5px;">Instrucciones</h3>
		    <div style="margin-left: 20px; padding: 10px;">
		    <b>
		        <br>
		        1. Ingrese su email.
		        <br>
		        <br>
		        2. Coloque el nombre de su paciente.
		        <br>
		        <br>
		        3. Ingrese su nombre completo y MP.
		        <br>
		        <br>
		        4. Describa la consulta especificando todos los detalles correspondientes al caso clínico.
		        <br>
		        <br>
		        5. Adjunte en un archivo .zip o .rar, la historia clinica, analisis cefalometrico, fotos intra y extra-orales, fotos de modelos.
		        <br>
		        *Todos los pasos anteriores son requeridos.
		        </b>
		        </div>
		</div>
	</div>
	<br>
		<br>
			<br>
				<br>
	
	 <!-- Start Footer -->
    <footer class="footer-box" style="background-color: #450d16;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="index"><img src="images/footer_logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-lg-12 white_fonts">
                    <h4 class="text-align">Contactanos</h4>
                </div>
                <div class="margin-top_30 col-md-8 offset-md-2 white_fonts">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="full icon text_align_center">
                                <img src="images/social1.png">
                            </div>
                            <div class="full white_fonts text_align_center">
                                <p>Virgen de la Merced 2345 Córdoba
                                    <br>Argentina</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full icon text_align_center">
                                <img src="images/social2.png">
                            </div>
                            <div class="full white_fonts text_align_center">
                                <p>formar.ortodoncia@gmail.com
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full icon text_align_center">
                                <img src="images/social3.png">
                            </div>
                            <div class="full white_fonts text_align_center">
                                <p>3517041460</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row white_fonts margin-top_30">
                <div class="col-lg-12">
                    <div class="full">
                        <div class="center">
                            <ul class="social_icon">
                                <a href="https://www.facebook.com/profile.php?id=100017806608966" target="_blank"><li><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/formar.ortodoncia/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://mail.google.com/mail/u/0/?tab=wm#inbox?compose=CllgCJZcRqZjHNbrpBQjXvbRKnGNQLDVXCXBQCrNRlFWPQZcvHdghmFvcBPVvbvNQnGCgwmXdvB" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom" style="background-color: #2e080e;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© 2020 Formar. All Rights Reserved.</p>
					<br>
					<p class="crp"><a href="https://www.instagram.com/belottidiego/" style="color: #fff; font-size: 18px;" target="_blank">>Diseño Digital y Web<</a></p>
                    <ul class="bottom_menu">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
	
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






