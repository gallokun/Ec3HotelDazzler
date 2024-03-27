<?php 
session_start();
if (isset($_SESSION['nombre_cli'])) {
	$nombre = $_SESSION["nombre_cli"];
} ?>
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
									<li class="">
										<a href="index.php">Inicio</a>
									</li>
									<li class="">
										<a href="habitaciones.php">Habitaciones</a>
									</li>
									<li class="active">
										<a href="ubicacion.php">Ubicación</a>
									</li>
									<?php
									if (isset($nombre)) {
										echo '<li class=""><a class="tooltips" href="cuenta.php">Mi cuenta<span>Bienvenido ' . $nombre . '</span></a></li>';

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
			<div class="row">
				<div class="span12">
					<br />
					<br />
					<h1 style="color:red"><b>Mapa y atracciones locales</b></h1>
					<br />
				</div>
				

				<div class="span9">
					<h3 style="color:blue">San Isidro: Un oasis urbano en el corazón de Lima</h3>
					<p>San Isidro es un distrito vibrante y cosmopolita ubicado en la provincia de Lima, Perú. Conocido por su ambiente seguro, calles arboladas y arquitectura moderna, San Isidro se ha convertido en uno de los distritos más codiciados para vivir, trabajar y disfrutar de la vida urbana.</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.261508645346!2d-77.05945482586266!3d-12.094241442784663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9acce90f36f%3A0xa0aa9b83e95e65c2!2sAv%20Javier%20Prado%20Oeste%202479!5e0!3m2!1ses!2spe!4v1710889422580!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					
					<br />
					<br />
					
				</div>
				

			</div>
		</div>
		<!-- /container -->

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
					
					
				</div>
			</div>
		</footer>

		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="js/socialcount.min.js"></script>
		<script src="js/jquery.quicksand.js" type="text/javascript"></script>

		<script type="text/javascript" src="js/global.js"></script>
	</body>
</html>