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
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
   <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
  <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>


</head>

<body id="home" style="position: relative; width:100%; max-width: 100%; overflow-x: hidden; font-family: 'Poppins', sans-serif;" data-spy="scroll" data-target="#navbar-wd"  data-offset="98">

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
            <li><a class="nav-link" href="contact">Dudas</a>
            </li>
            <li><a class="nav-link" style="margin-left:25px;" href="cerrar_sesion_be"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->
<style>
.c_review {
    margin-bottom: 0
}

.c_review li {
    margin-bottom: 16px;
    padding-bottom: 13px;
    border-bottom: 1px solid #e8e8e8
}

.c_review li:last-child {
    margin: 0;
    border: none
}

.c_review .avatar {
    float: left;
    width: 80px
}

.c_review .comment-action {
    float: left;
    width: calc(100% - 80px)
}

.c_review .comment-action .c_name {
    margin: 0
}

.c_review .comment-action p {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    max-width: 95%;
    display: block
}

.product_item:hover .cp_img {
    top: -40px
}

.product_item:hover .cp_img img {
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22)
}

.product_item:hover .cp_img .hover {
    display: block
}

.product_item .cp_img {
    position: absolute;
    top: 0px;
    left: 50%;
    transform: translate(-50%);
    -webkit-transform: translate(-50%);
    -ms-transform: translate(-50%);
    -moz-transform: translate(-50%);
    -o-transform: translate(-50%);
    -khtml-transform: translate(-50%);
    width: 100%;
    padding: 15px;
    transition: all 0.2s ease-in-out
}

.product_item .cp_img img {
    transition: all 0.2s ease-in-out;
    border-radius: 6px
}

.product_item .cp_img .hover {
    display: none;
    text-align: center;
    margin-top: 10px
}

.product_item .product_details {
    padding-top: 80%;
    text-align: center
}

.product_item .product_details h5 {
    margin-bottom: 5px
}

.product_item .product_details h5 a {
    font-size: 16px;
    color: #444
}

.product_item .product_details h5 a:hover {
    text-decoration: none
}

.product_item .product_details .product_price {
    margin: 0
}

.product_item .product_details .product_price li {
    display: inline-block;
    padding: 0 10px
}

.product_item .product_details .product_price .new_price {
    font-weight: 600;
    color: #ff4136
}

.product_item_list table tr td {
    vertical-align: middle
}

.product_item_list table tr td h5 {
    font-size: 15px;
    margin: 0
}

.product_item_list table tr td .btn {
    box-shadow: none !important
}

.product-order-list table tr th:last-child {
    width: 145px
}

.preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.preview .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

.preview .preview-thumbnail.nav-tabs {
    margin-top: 15px;
    font-size: 0
}

.preview .preview-thumbnail.nav-tabs li {
    width: 20%;
    display: inline-block
}

.preview .preview-thumbnail.nav-tabs li nav-link img {
    max-width: 100%;
    display: block
}

.preview .preview-thumbnail.nav-tabs li a {
    padding: 0;
    margin: 2px;
    border-radius: 0 !important;
    border-top: none !important;
    border-left: none !important;
    border-right: none !important
}

.preview .preview-thumbnail.nav-tabs li:last-of-type {
    margin-right: 0
}

.preview .tab-content {
    overflow: hidden
}

.preview .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
    animation-name: opacity;
    -webkit-animation-duration: .3s;
    animation-duration: .3s
}

.details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.details .rating .stars {
    display: inline-block
}

.details .sizes .size {
    margin-right: 10px
}

.details .sizes .size:first-of-type {
    margin-left: 40px
}

.details .colors .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px
}

.details .colors .color:first-of-type {
    margin-left: 20px
}

.details .colors .not-available {
    text-align: center;
    line-height: 2em
}

.details .colors .not-available:before {
    font-family: Material-Design-Iconic-Font;
    content: "\f136";
    color: #fff
}

@media screen and (max-width: 996px) {
    .preview {
        margin-bottom: 20px
    }
}

@-webkit-keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

@keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

.cart-page .cart-table tr th:last-child {
    width: 145px
}

.cart-table .quantity-grp {
    width: 120px
}

.cart-table .quantity-grp .input-group {
    margin-bottom: 0
}

.cart-table .quantity-grp .input-group-addon {
    padding: 0 !important;
    text-align: center;
    background-color: #1ab1e3
}

.cart-table .quantity-grp .input-group-addon a {
    display: block;
    padding: 8px 10px 10px;
    color: #fff
}

.cart-table .quantity-grp .input-group-addon a i {
    vertical-align: middle
}

.cart-table .quantity-grp .form-control {
    background-color: #fff
}

.cart-table .quantity-grp .form-control+.input-group-addon {
    background-color: #1ab1e3
}

.ec-checkout .wizard .content .form-group .btn-group.bootstrap-select.form-control {
    padding: 0
}

.ec-checkout .wizard .content .form-group .btn-group.bootstrap-select.form-control .btn-round.btn-simple {
    padding-top: 12px;
    padding-bottom: 12px
}

.ec-checkout .wizard .content ul.card-type {
    font-size: 0
}

.ec-checkout .wizard .content ul.card-type li {
    display: inline-block;
    margin-right: 10px
}

.card {
    background: #fff;
    margin-bottom: 30px;
    transition: .5s;
    border: 0;
    border-radius: .55rem;
    position: relative;
    width: 109%;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
}

.card .body {
    font-size: 14px;
    color: #424242;
    padding: 20px;
    font-weight: 400;
}</style>

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

      
    </div>



    <div align="center" style="width: auto; margin-left: 180px;">
    <?php 
     
     if(isset($_GET["inicio"])){
        
        /*echo '<p>Bienvenido al aula virtual de FORMAR ' .$_SESSION['usuario']. '<p>';*/
        echo '
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="first-slide" src="images/Banners.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/Banners.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="third-slide" src="images/Banners.png" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <i class="fas fa-chevron-left carousel-control-next-icon" style="color: black; font-size: 30px;" aria-hidden="false"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <i class="fas fa-chevron-right carousel-control-prev-icon" style="color: black; font-size: 30px;" aria-hidden="false"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
        
        <hr>
        <div class="container">
<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard">
	   <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
 		 <div class="carousel-inner">
			<div class="carousel-item active">			  
			<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/FFB6C1/000000" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Bootdey</span> 
		            <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
		            <p class="textfeat" style="display: none;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  		<div class="carousel-item">			  
	  		<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/87CEFA/000000" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Bootdey</span> 
		            <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
		            <p class="textfeat" style="display: none;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  		<div class="carousel-item">			  
	  		<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/FFB6C1/000000" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Bootdey</span> 
		            <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
		            <p class="textfeat" style="display: none;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  		<div class="carousel-item">			  
	  		<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/FF7F50/000000" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Industri</span> 
		            <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
		            <p class="textfeat" style="display: none;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  		<div class="carousel-item">			  
	  		<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/20B2AA/000000" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Bootdey</span> 
		            <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
		            <p class="textfeat" style="display: none;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  		<div class="carousel-item">			  
	  		<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/87CEFA/000000" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Bootdey</span> 
		            <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
		            <p class="textfeat" style="display: none;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  		</div>
	  </div>
	</div>
	<div class="col-6 py-0 px-1 d-none d-lg-block">
		<div class="row">
			<div class="col-6 pb-2 mg-1	">
				<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/FFA07A/000000" alt="">
		        <div class="card-img-overlay d-flex">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Finansial</span> 
		            <h6 class="card-title">BI Atur Standarisasi QR Code</h6>
		          </a>
		        </div>
		      	</div>
			</div>
			<div class="col-6 pb-2 mg-2	">
				<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/BA55D3/000000" alt="">
		        <div class="card-img-overlay d-flex">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Industri</span> 
		            <h6 class="card-title">PTSP BP Batam Masuk 10 Terbaik di Indonesia</h6>
		          </a>
		        </div>
		      	</div>
			</div>
			<div class="col-6 pb-2 mg-3	">
				<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/C71585/000000" alt="">
		        <div class="card-img-overlay d-flex">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Ekspor</span> 
		            <h6 class="card-title">Review GSP: Amerika Ingin Perdagangan Saling Menguntungkan</h6>
		          </a>
		        </div>
		      	</div>
			</div>
			<div class="col-6 pb-2 mg-4	">
				<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="https://via.placeholder.com/350x350/000080/000000" alt="">
		        <div class="card-img-overlay d-flex">
		          <a href="#" class="align-self-end">
		        	<span class="badge">Pertumbuhan Ekonomi</span> 
		            <h6 class="card-title">DPR Setujui Penambahan Anggaran BP Batam Rp565 Miliar</h6>
		          </a>
		        </div>
		      	</div>
			</div>
		</div>
	</div>
</div>
</div>
        <hr>
        
        <br>
        <button onclick="myFunction()" class="cursog"><i class="fab fa-youtube"></i> Videos Gratuitos</button>
        <div id="unoa" class="w3-animate-opacity" style="display:none"> 
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
        <br>
        ';
        echo'
        <button onclick="myFunctiona()" class="cursog"><i class="fab fa-youtube"></i>Cursos Online</button>
        <div id="dosa" style="display:none" class="w3-animate-opacity">
        <br>
        <button class="dropdown-btna">Ortodoncia
      </button> 
      <div class="dropdown-containera w3-animate-opacity">
      
        ';
         
           $ortodoncia = "ortodoncia";
            if ($categoria['categoria'] = "$ortodoncia"){
          
                include 'conexion_be.php';
                $sql1 = mysqli_query($conexion, "SELECT * FROM nombre_cursos WHERE categoria='$ortodoncia'");
                $query1 = mysqli_query($conexion, $sql1);
                $row1 = mysqli_fetch_array($sql1);
                echo '<div class="row" style="width: 900px;">';
                foreach ($sql1 as $values1){
                    echo'<div class="col-lg-4 col-md-12 mb-4">
                    <br><form method="post" action="aulavirtual?idcurso">
                        <input style="background: none; border: none; color: white; " type="hidden" name="idcurso" value="' . $values1['id'] . '">
                        <input class="modulosi" type="image" placeholder="Proximamente" alt="Submit" src="' . $values1['foto_curso'] . '" value="'.$values1["nombre_curso"].'">
                    </form> </div>';
                //echo '<li><a href="aulavirtual?idcurso=' . $values['id'] . '">' . $values['nombre_curso'] . '</a></li>';
                }
                echo '</div>';
                echo '
                <div class="container">
                <div class="row clearfix">';
                foreach ($sql1 as $values1){
                    echo'  <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                         <form method="post" action="aulavirtual?idcurso">
                        <input style="background: none; border: none; color: white; display:none" type="hidden" name="idcurso" value="' . $values1['id'] . '">
                        <input class="modulosi" type="image" placeholder="Proximamente" src="' . $values1['foto_curso'] . '" value="'.$values1["nombre_curso"].'">
                    </form>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fas fa-info"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="">'.$values1["nombre_curso"].'</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="new_price">$'.$values1["precio"].'</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>';
                //echo '<li><a href="aulavirtual?idcurso=' . $values['id'] . '">' . $values['nombre_curso'] . '</a></li>';
                }
                echo '</div></div>';
            }   
                
    echo '</div>';
    
    

    echo'
        <br>
        <br>
        <button class="dropdown-btna">Estetica
      </button> 
      <div class="dropdown-containera w3-animate-opacity">
      
        <ul>';
         
           $estetica = "estetica";
            if ($categoria['categoria'] = "$estetica"){
          
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT * FROM nombre_cursos WHERE categoria='$estetica'");
                $query = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($sql);
                echo '<div class="row" style="width: 900px;">';
                foreach ($sql as $values){
                    echo' <div class="col-lg-4 col-md-12 mb-4">
                    <br><form method="post" action="aulavirtual?idcurso">
                        <input style="background: none; border: none; color: white;" type="hidden" name="idcurso" value="' . $values['id'] . '">
                        <input class="modulosi" type="image" alt="Submit" src="' . $values['foto_curso'] . '" value="'.$values["nombre_curso"].'">
                    </form> </div>';
                //echo '<li><a href="aulavirtual?idcurso=' . $values['id'] . '">' . $values['nombre_curso'] . '</a></li>';
                }
                echo '</div>';
            }   
                
    echo '</div>';
    
        echo'
        <br>
        <br>
        <button class="dropdown-btna">ATM
      </button> 
      <div class="dropdown-containera w3-animate-opacity">
      
        <ul>';
         
           $atm = "atm";
            if ($categoria['categoria'] = "$atm"){
          
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT * FROM nombre_cursos WHERE categoria='$atm'");
                $query = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($sql);
                echo '<div class="row" style="width: 900px;">';
                foreach ($sql as $values){
                   echo'  <div class="col-lg-4 col-md-12 mb-4">
                   <br><form method="post" action="aulavirtual?idcurso">
                        <input style="background: none; border: none; color: white;" type="hidden" name="idcurso" value="' . $values['id'] . '">
                        <input class="modulosi" type="image" alt="Submit" src="' . $values['foto_curso'] . '" value="'.$values["nombre_curso"].'">
                    </form> </div>';
                //echo '<li><a href="aulavirtual?idcurso=' . $values['id'] . '">' . $values['nombre_curso'] . '</a></li>';
                }
                 echo '</div>';
            }   
                
    echo '</div>';
    
    echo'
        <br>
        <br>
        <button class="dropdown-btna">Prostodoncia
      </button> 
      <div class="dropdown-containera w3-animate-opacity">
      
        <ul>';
         
           $prostodoncia = "prostodoncia";
            if ($categoria['categoria'] = "$prostodoncia"){
          
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT * FROM nombre_cursos WHERE categoria='$prostodoncia'");
                $query = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($sql);
                echo '<div class="row" style="width: 900px;">';
                foreach ($sql as $values){
                    echo' <div class="col-lg-4 col-md-12 mb-4">
                    <br><form method="post" action="aulavirtual?idcurso">
                        <input style="background: none; border: none; color: white;" type="hidden" name="idcurso" value="' . $values['id'] . '">
                        <input class="modulosi" type="image" alt="Proximamente" src="' . $values['foto_curso'] . '" value="'.$values["nombre_curso"].'">
                    </form> </div>';
                //echo '<li><a href="aulavirtual?idcurso=' . $values['id'] . '">' . $values['nombre_curso'] . '</a></li>';
                }
                 echo '</div>';
            }   
                
    echo '</div>';
    
    echo'
        <br>
        <br>
        <button class="dropdown-btna">Implantologia
      </button> 
      <div class="dropdown-containera w3-animate-opacity">
      
        <ul>';
         
           $implantologia = "implantologia";
            if ($categoria['categoria'] = "$implantologia"){
          
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT * FROM nombre_cursos WHERE categoria='$implantologia'");
                $query = mysqli_query($conexion, $sql);
                $row = mysqli_fetch_array($sql);
                echo '<div class="row" style="width: 900px;">';
                foreach ($sql as $values){
                    echo'  <div class="col-lg-4 col-md-12 mb-4">
                    <br><form method="post" action="aulavirtual?idcurso">
                        <input style="background: none; border: none; color: white;" type="hidden" name="idcurso" value="' . $values['id'] . '">
                        <input class="modulosi" type="image" alt="Submit" src="' . $values['foto_curso'] . '" value="'.$values["nombre_curso"].'">
                    </form> ';
                //echo '<li><a href="aulavirtual?idcurso=' . $values['id'] . '">' . $values['nombre_curso'] . '</a></li>';
                }
                 echo '</div>';
            }   
                
    echo '</div></div>';
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
                    </div>
                </div>
                <div class="content-panel">
                    <form class="form-horizontal" method="POST" action="cargarfotos_be.php" enctype="multipart/form-data">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">Informacion Personal</h3>
                            <div class="form-group avatar">
                                <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                    <img class="img-rounded img-responsive" src="'.$rowusuario['foto'].'" alt="">
                                </figure>
                                <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                    <input type="file" name="file" class="file-uploader pull-left">
                                    <button type="submit" name="enviarfoto" class="btn btn-sm btn-default-alt pull-left">Update Image</button>
                                </div>
                            </div>
                            </form>
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
                                    <p class="help-block">This is the email </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Telefono</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="email" class="form-control" value="'.$rowusuario['telefono'].'">
                                    <p class="help-block">This is the email </p>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-primary" type="submit" value="Update Profile">
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
                        echo '<div class="container bootstrap snippets bootdeys">';
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
                                          </form>
                                          <div class="col-md-4">
                                           <div class="card card-background">
                                                <div class="image" style="background-image: url(https://via.placeholder.com/266x200/87CEEB); background-size: cover; background-position: 50% 50%;">
                                                    <div class="filter"></div>
                                                </div>
                                                 <div class="content">
                                                    <h5 class="price">user profile description
                                                         <a href="#" class="pull-right">
                                                            <i class="fa fa-heart"></i>3.3.5
                                                         </a>
                                                     </h5> 
                                                </div>
                                                <div class="footer">
                                                   <div class="author">
                                                        <a href="#">
                                                           <span>Dey-Dey</span>
                                                        </a>
                                                    </div>
                                                   <div class="stats pull-right">
                                                        <i class="fa fa-eye"></i>  253                                
                                                   </div>                           
                                                </div>
                                            </div>
                                        </div>';
                                          //echo '<a href="aulavirtual?idmodulo='.$valueModulos["id"].'">'.$valueModulos["nombre"].'</a>';
                                      } 
                                 echo '</div>';
                                
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


                            } if (isset($rowvideos['tb_modulo_id'])){
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
                    }
                    
    ?>
    
       
    

       
    </div>

<!--<style>
    model-viewer {
        width: 600px;
        height: 400px;
        margin: auto;
        display: flex;
        camera-orbit radius: Infinity 360deg auto;
    }
     #lazy-load-poster {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-image: url("models/jaw_teeth_BaseColor.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
  }
</style>
<div style="margin-left: 200px;">
<model-viewer src="models/untitled2.glb" camera-controls exposure="1.03" shadow-intensity="5.9">

</model-viewer>

</div>
  </div>-->
 
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
          </p><p class="crp"><a href="https://www.instagram.com/belottidiego/" style="color: #fff; font-size: 18px;" target="_blank">>Diseño Digital y Web<</a>
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


  <script src="jquery-1.11.3.min.js"></script>
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
