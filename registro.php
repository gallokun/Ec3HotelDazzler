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
		<link href="favicon.ico" rel="icon" type="image/x-icon" />
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
		</div>
		<br>
		<br>
		<div class="container-fluid">
			<div class="span12">
				<div class="row">
					<div class="span9">
						<form class="form-horizontal well" method="post" action="includes/validaregistro.php">

							<h1>Crea tu cuenta</br><small>y comienza a reservar tu habiación. </small></h1>
							<br />
							<div class="row">

								<div class="span8">
									<legend>
										<span>Tu</span> nombre
									</legend>
								</div>
								<div class="span3">
									<label>Nombres y Apellidos
										<input type="text" style="width: 600px;" placeholder="Nombres_Apellidos" name="nombre_cli" required/>
									</label>
								</div>
									<br>
								

							</div><!--/row Tu nombre-->
							<br />
							<div class="row">
								<div class="span8">
									<legend>
										<span>Tu</span> cuenta
									</legend>
								</div>

								<div class="span3">
									<label>Telefono
										<input type="text" name="tel" required />
									</label>

								</div>

								<div class="span3">
									<label>Dirección de correo
										<input type="email" name="email" style="width: 300px;" required />
									</label>

								</div>

								<div class="span3">
									<label>Contraseña
										<br/>
										<input type="password" name="pass" required />
									</label>

								</div>

							<!--/row direccion-->
								<div class="span3">
									<label>Nombre de usuario
										<input type="text" name="user" required/>
									</label>
								
								</div>
								<div class="span9">
									<br />
									<p>
										<input type="submit" value="Reistrar &rarr;"/ class="btn btn-primary btn-large book-now">
									</p>
									<br />
									<br />
								</div>
							</div>
					</div>
					<br/>

							<!-- <div class="row">
								<div class="span9">
									<br />
									<p>
										<input type="submit" value="Reistrar &rarr;"/ class="btn btn-primary btn-large book-now">
									</p>
									<br />
									<br />
								</div>
							</div> -->

						</form>
					</div><!--/span9-->
			</div><!--/span12-->

		</div><!-- /container-fluid-->
		<br>
		<br>							
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
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="js/socialcount.min.js"></script>
		<script src="js/jquery.quicksand.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/global.js"></script>
	</body>
</html>