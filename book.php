<?php
include("includes/conexion.php");
session_start();
if (isset($_SESSION['nombre_cli'])) {
	$nombre = $_SESSION['nombre_cli'];
}
else{
	
}

$habi = $_POST['hab'];
echo "$habi";
$cin = $_POST['checkin'];
$cout = $_POST['checkout'];
$ad = $_POST['adul'];
$ni = $_POST['nin'];
if (isset($_SESSION['id_cli'])) {
	$id = $_SESSION['id_cli'];
}
$conectar = Conectarse();
$consulta = "SELECT habitaciones.id_habitacion, habitaciones.tipo,
habitaciones.descripcion,habitaciones.imagen,habitaciones.nombre as nombreh, tipohabitacion.id_tipo,
tipohabitacion.nombre as nombret, tipohabitacion.precio FROM habitaciones, tipohabitacion 
WHERE $habi=habitaciones.id_habitacion AND habitaciones.tipo=tipohabitacion.id_tipo";
$resultado = mysqli_query($conectar, $consulta);
$datohabitacion = mysqli_fetch_array($resultado);
 ?>
<!DOCTYPE html>
<html lang="es"><head>
	
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
		<div class="container-fluid">
			<div class="row"><!-- start header -->
				<div class="span5 logo">
					<a href="index.php">
					<div class="row">
						<div class="span3 logo">
						<img src="css/images/logo.png.jpg" alt="Hotel Palmira" title="Hotel Palmira">	
						
						</div>
					</div>
					</a>
				</div>		
				<div class="span6 pull-right main_menu">
					<div class="navbar">
						<div class="container">
							 <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>

							<div class="nav-collapse">
								<ul class="nav nav-pills">
									<li class=""><a href="index.php">Inicio</a></li>
									<li class="active"><a href="habitaciones.php">Habitaciones</a></li>
									<li class=""><a href="ubicacion.php">Ubicación</a></li>
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
			</div><!-- end header --><div class="row booking_summary">
	<div class="span12">	
		
		<div class="row">
			<br /><br />
			<div class="span6">
				<img src="css/images/rooms/<?php echo $datohabitacion['imagen']; ?>.jpg" alt="">
				<br>
				<div class="span4">
						<?php
						if (isset($id)) {

							echo '<a class="btn btn-primary btn-large check-availability" href="includes/insertarreservacion.php?
							id='.$id.'&hab='.$habi .'&fecin='.$cin.'&fecs='.$cout.'&na='.$ad.'&nn='.$ni.'">Confirmar</a>';

						} else {
							echo '<h3>Debes <span><a href="login.php">iniciar sesion</a></span> para poder confirmar tu reservación</h3>';

						}
						 ?>
			</div>					
			</div>
			
			<div class="span6">
				<br /><br />
				<h3><span>Detalles de tu </span>reservacion</h3>
				<p>
					<div class="pull-left">Check in : <i></i> <?php echo "$cin"; ?></div><br />
					<div class="pull-left">Check out : <i><?php echo "$cout"; ?></i></div><br />
					<div class="pull-left">Tipo de habitación : <i><?php echo $datohabitacion['nombret']; ?></i></div><br />
					<div class="pull-left">Precio por noche : <i><?php echo $datohabitacion['precio']; ?></i></div><br />

					<br />
					<h3><span>Habitacion</span> seleccionada</h3>
					<br />
					<div class="pull-left">Habitación : <i><?php echo $datohabitacion['nombreh']; ?></i></div><br />
					<div class="pull-left">Descripción : <i><?php echo $datohabitacion['descripcion']; ?></i></div><br />
					<br /><br />
				</p>
			</div>
			<!-- <div class="span4">
						<?php
						if (isset($id)) {

							echo '<a class="btn btn-primary btn-large check-availability" href="includes/insertarreservacion.php?
							id='.$id.'&hab='.$habi .'&fecin='.$cin.'&fecs='.$cout.'&na='.$ad.'&nn='.$ni.'">Confirmar</a>';

						} else {
							echo '<h3>Debes <span><a href="login.php">iniciar sesion</a></span> para poder confirmar tu reservación</h3>';

						}
						 ?>
			</div> -->
		</div>	
	</div>
</div></div> <!-- /container -->
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