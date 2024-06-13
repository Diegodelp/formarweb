
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=0.3">


    <!-- Site Metas -->
    <title>Formar Odontologia-Cordoba</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Diego Belotti">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/formarico.png" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Desplegable -->
    <link rel="stylesheet" href="css/dropdown.css">
    <!-- Navar -->
    <link rel="stylesheet" href="css/navvar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">


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

    <!-- Start header -->
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
							<li><a href="atm-online">Online</a></li>
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
			<?php
			if(isset($_SESSION['usuario']) || isset($_SESSION['privilegios'])){
			echo'<li><a class="nav-link" href="login"><i class="fas fa-user-circle"></i> Aula Virtual</a></li>
			        <li><a class="nav-link" href="cerrar_sesion_be"><i class="fas fa-sign-out-alt"></i></a></li>';
			} else echo '<li><a class="nav-link" href="login"><i class="fas fa-user-circle"></i> Login</a></li>';
			
                 ?> 
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/bancos1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3 style="color:#7ba4e3; text-shadow: 2px 1px 3px black;"><span class="theme_color"></span>FORMAR</h3>
                                        <br>
                                        <h4 b style="color:white; text-shadow: 2px 1px 3px black;">Un espacio para pensar, hacer y sentir<br>ODONTOLOGÍA</h4>
                                        <br>
					<a style="color:white; font-size: 20px; text-shadow: 2px 1px 3px black;">
                                            Acompañandote en la formación
                                            <br>constante de nuestra profesión. 
					    <br> Avalados por el Colegio Odontológico de Córdoba.
					</p>
                                        <a class="contact_bt" href="contact">Contactános</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/sillones.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span class="theme_color" style="text-shadow: 2px 1px 3px black;">CURSOS</span> DE ODONTOLOGÍA</h3>
                                        <br>
					<h4 style="text-shadow: 2px 1px 3px white;">Asociación Formar</h4>
					<br>
                                        <a style="color:black; font-size: 20px; text-shadow: 2px 1px 3px white;">Odontología Simplificada
					<br>
					Fácil de transmitir y que emocione.
					<br>
					QUÉ TE EMOCIONE!!
                                        <br>
                                        </p>
						</p>
                                        <a class="contact_bt" href="contact">Contactanos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span> CURSOS DE ASOCIACIÓN FORMAR</h2>
                            <p class="large">Cursos de Odontología</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section -->
    <div class="section layout_padding theme_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text_align_center">
                    <div class="full">
                        <img class="img-responsive" src="images/resume_img.png" alt="#" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 white_fonts">
                    <h3 class="small_heading">LO QUE NOSOTROS TE BRINDAMOS</h3>
                    <p>INSTRUCCION Y APOYO CONSTANTE DURANTE Y LUEGO DEL TRANSCURSO DE APRENDIZAJE </p>
                    <p>Es una asociación avalada por el colegio odontologico de Córdoba como ente formador, destinada a brindarle nuevos conocimientos en la disciplina ortodóncica, para la constante formación profesional y humana.</p>
                    <p> <a href="ortodoncia" class="hvr-radial-out button-theme">Cursos Presenciales</a></p>
			<br>
			<br>
			   <p> <a href="ortodoncia-online" class="hvr-radial-out button-theme">Cursos Online</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="full center margin-bottom_30">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color">CONSULTORÍAS</span> Y MENTORÍAS PROFESIONALES</h2>
                            <p class="large">En Ortodoncia y Ortopedia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/consultment/modelo.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/consultment/medida.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/consultment/posicion.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/cefalometria.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img3.jpg" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img1.jpg" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/consultment/ortopan.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/consultment/rx.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

                <div class="col-lg-12">
                    <p style="color: black;">La consultoría es un servicio de asesoría especializada e independiente al que recurren los profesionales con el fin de encontrar soluciones a uno o más de sus problemas en su consultorio, que se sustenta en la innovación, la experiencia, el conocimiento, las habilidades de los profesionales, los métodos y las herramientas.
                    <br>
                    Por otro lado la mentoría es un servicio mas personalizado donde el mentor, trasmite la experiencia completa, integral y sistematizada de manera mas amplia y continua durante el tratamiento de un paciente.  </p>
                </div>

                <div class="col-lg-12">
                    <div class="full center">
                        <p> <a href="consultorias-mentorias-ortodoncia" class="hvr-radial-out button-theme">Ver mas ></a></p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding theme_bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 white_fonts">
                    <h3 class="small_heading">¿QUERES SER PACIENTE DE NUESTROS CURSOS?</h3>
                    <p>BANCO DE PACIENTES</p>
                    <p>Podes incorporarte al banco de potenciales pacientes, te ofrecemos atención clínica de alto valor humano y científico, con seguimiento personalizado de nuestros alumnos.</p>
                        <p><a href="contact" class="hvr-radial-out button-theme">Contactanos ></a></p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 text_align_center">
                    <div class="full">
                        <img class="img-responsive" src="images/paciente.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="full">
                        <div class="center">
                            <img src="images/icon1.png" alt="#" />
                        </div>
                        <div class="center">
                            <h4>Atención Integral</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="full">
                        <div class="center">
                            <img src="images/icon2.png" alt="#" />
                        </div>
                        <div class="center">
                            <h4>Dedicación a la Formación</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="full">
                        <div class="center">
                            <img src="images/icon3.png" alt="#" />
                        </div>
                        <div class="center">
                            <h4>Dedicados a Profesionales</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1 margin-top_30">
                    <div class="full text_align_center">
                        <p></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="index.html"><img src="images/footer_logo.png" alt="#" /></a>
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
                                <p>formar.ortodoncia@gmail.com</p>
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

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12" >
                    <p class="crp">© 2020 Formar . All Rights Reserved.</p>
					<br>
					<p class="crp"><a href="https://www.instagram.com/belottidiego/" style="color: #fff; font-size: 18px;" target="_blank">>Diseño Digital y Web<</a></p>
                    <ul class="bottom_menu">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>				
			<div id="sfc42u9e811mjmlq1qcgx2dzk959bf2u9x9"></div>
			<script type="text/javascript" src="https://counter1.stat.ovh/private/counter.js?c=42u9e811mjmlq1qcgx2dzk959bf2u9x9&down=async" async></script>
			<noscript><a href="https://www.freecounterstat.com" title="page counter"><img src="https://counter1.stat.ovh/private/freecounterstat.php?c=42u9e811mjmlq1qcgx2dzk959bf2u9x9" border="0" title="page counter" alt="page counter"></a></noscript>
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
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>