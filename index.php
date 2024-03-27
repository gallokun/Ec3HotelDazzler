<?php
session_start();
if (isset($_SESSION['nombre_cli'])) {
	$nombre = $_SESSION['nombre_cli'];
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>

		<meta charset="utf-8" />
		<title>Hotel Dazzler</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" type="text/css" />
		<link rel="stylesheet" href="css/hotel.css" type="text/css" />
		<link rel="stylesheet" href="css/hotel-responsive.css" type="text/css" />
		<link rel="stylesheet" href="js/slider/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/socialcount-with-icons.css" type="text/css" media="screen" />
		<style>
			div.ui-datepicker {
				font-size: 11px;
			}
		</style>
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/bootstrap_ie7.css" type="text/css">
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<!-- start header -->
				<div class="span5 logo">
					<a href="index.php">
					<div class="row">
						<div class="span3 logo">
						<img src="css/images/logo.png.jpg" alt="Hotel Palmira" title="Hotel Palmira">	
						
						</div>
					</div> </a>
				</div>
				<div class="span6 pull-right main_menu">
					<div class="navbar">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

							<div class="nav-collapse">
								<ul class="nav nav-pills">
									<li class="active">
										<a href="index.php">Inicio</a>
									</li>
									<li class="">
										<a href="habitaciones.php">Habitaciones</a>
									</li>
									<li class="">
										<a href="ubicacion.php">Ubicación</a>
									</li>
									<?php
									if (isset($nombre)) {
										echo '<li class=""><a class="tooltips" href="#">Mi cuenta<span>Bienvenido ' . $nombre . '</span></a></li>';

									} else {
										echo '<li class=""><a href="login.php">Inicia Sesión</a></li>';
									}
									?>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar -->
				</div>
			</div><!-- end header -->
			<div class="row-fluid slideshow-row">

				<div class="span12 slideshow">
					<div class="slider-wrapper theme-default">
						<div class="ribbon"></div>
						<div id="nivoslider-125" class="nivoSlider">
							<img src="css/images/1.jpg" alt=""/>
							<img src="css/images/2.jpg" alt=""/>
							<img src="css/images/3.jpg" alt=""/>
						</div>
					</div>
					<div id="nivoslider-125-caption-0" class="nivo-html-caption"></div>
				</div>

			</div>
			<div class="row-fluid home">
				<div class="span12">
					<h2>Comienza <span><a href="habitaciones.php">reservando tu habitación</a></span>
					<br />
					</h2>

				</div>
			</div>
			<hr />
			<div class="row-fluid">

				<div class="span3">
					<h3><span>H</span>abitaciones</h3>
					<a href="habitaciones.php"><img src="css/images/suite.jpg" alt="" /></a>
					<p>
						Ve nuestras habitaciones y reservala al instante
					</p>
				</div>
				<div class="span3">
					<h3><span>S</span>ervicios</h3>
					<a href="servicios.php"><img src="css/images/restaurant.jpg" alt="" /></a>
					<p>
						Disfrute de los mejores platillos de Jiquilpan en nuestro Restautant
					</p>
				</div>
				<div class="span3">
					<h3><span>P</span>romociones</h3>
					<a href="promociones.php"><img src="css/images/recepcion.jpg" alt="" /></a>
					<p>
						Hospedate cinco noches y disfrute de una noche más totalmente <b>gratis</b>!
					</p>
				</div>
				<div class="span3">
					<h3><span>U</span>bicacion</h3>
					<iframe width="220" height="135" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.261508645346!2d-77.05945482586266!3d-12.094241442784663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9acce90f36f%3A0xa0aa9b83e95e65c2!2sAv%20Javier%20Prado%20Oeste%202479!5e0!3m2!1ses!2spe!4v1710889422580!5m2!1ses!2spe"></iframe>
					<br />
					<small><a href="ubicacion.php">Ver mapa más grande</a></small>
				</div>
			</div>
		</div>
		<!-- /container -->
		<br/>
		<br/>
		<br/>
		<footer>
			<div class="container">
				<div class="row footer_section_pre">
					<div class="span4">
						<h4>Hotel Dazzler<span class="line"></span></h4>
						<p>
							Lima San Isidro
						</p>
						<p>
							Av. Javier Prado Oeste 2479, San Isidro – Lima, Perú
							<br />
							Tel: 01 533 0091
							<br />
							Email: hoteldazzler@gmail.com
						</p>
						<ul data-facebook-action="recommend" data-url="#" class="socialcount socialcount-small recommend grade-a">
							<li class="facebook">
								<a title="Comparte en Facebook" href="https://www.facebook.com/profile.php?id=100012143625910&locale=es_LA"><span class="social-icon icon-facebook"></span><span class="count"></span></a>
							</li>
						</ul>
						<br />
						<p class="copy">
							&copy; 2024 <a href="http://appsarea.com/">Grupo-4</a>
						</p>
					</div>
					<div class="span4">
						<?php
						if (isset($nombre)) {
							echo '<h4>Bienvenido<span class="line"></span></h4>';
							echo '<p>' . $nombre . '</p>';
							echo '<a href="includes/logout.php">Salir</a>';
						} else {
							echo '<a href="login.php"><h4>Inicia Sesión<span class="line"></span></h4></a>';
							echo '<a href="registro.php"><h4>Crea una cuenta<span class="line"></span></h4></a>';
						}
						?>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="js/socialcount.min.js"></script>
		<script src="js/jquery.quicksand.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/global.js"></script>
	</body>
</html>