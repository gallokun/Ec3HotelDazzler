<!-- session_start();
include ('includes/conexion.php');
//$id=$_SESSION['id'];
//echo $id;
//variable de paso por url
if (isset($_SESSION['nombre_cli'])) {
	$nombre = $_SESSION["nombre_cli"];
}
$hab = $_GET['hab'];
$conectar = Conectarse();
$consulta = "SELECT nombre,descripcion,imagen FROM habitaciones WHERE id_habitacion='$hab'";
$resultado = mysql_query($consulta, $conectar);
if (mysql_num_rows($resultado)) {
	//header("Location:clientes.php");
	$array = mysql_fetch_array($resultado);
	$nh = $array['nombre'];
	$dh = $array['descripcion'];
	$ih = $array['imagen'];
} else {
	echo "No se borro";
} -->
<?php
session_start();
include('includes/conexion.php');

if (isset($_SESSION['nombre_cli'])) {
    $nombre = $_SESSION["nombre_cli"];
}

$hab = $_GET['hab'];
$host='localhost';
$usuario='root';
$contrasena='root';
$base_de_datos='sistema_reservacion';

$conectar = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conectar->connect_error) {
    die("La conexión falló: " . $conectar->connect_error);
}

$consulta = "SELECT nombre, descripcion, imagen FROM habitaciones WHERE id_habitacion=?";
$stmt = $conectar->prepare($consulta);
$stmt->bind_param("i", $hab);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $nh = $row['nombre'];
    $dh = $row['descripcion'];
    $ih = $row['imagen'];
} else {
    echo "No se encontraron registros";
}

$stmt->close();
$conectar->close();
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
			<div class="row book-start">
				<form action='book.php' method="POST">

					<div class="span12">
						<br />
						<br />
						<h1 style="color:red"><b>Reserva tu habiatación</b></h1>
						<h3 style="color:blue">¿Cuándo quieres reservar con nosotros?</h3>

						<div class="row">
							<div class="span4">
								<h3><span>Habitación</span> seleccionada</h3>
								<div class="room_selector">
									<h5><?php echo $nh; ?></h5>
									<img src="css/images/rooms/<?php echo $ih; ?>.jpg" alt="" />
									<p>
										<?php echo $dh; ?>
									</p>
									<input type="hidden" value="<?php echo $hab; ?>" name="hab">
								</div>
							</div>
							<div class="span3">
								<h3><span>Fechas</span></h3>
								<label>Fecha de entrada </label>
								<input type="date" value="" class="input-large" name="checkin" required>
								<label>Fecha de salida </label>
								<input type="date" value="" class="input-large" name="checkout" required>
							</div>

							<div class="span3">
								<h3><span>Personas</span></h3>
								<div class="control-group">
									<label class="control-label">Adultos</label>
									<div class="controls">
										<select class="span1 select_adults" name="adul" required>
											<option />1 <option />2 <option />3 <option />4 <option />5
										</select>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Niños</label>
									<div class="controls">
										<select class="span1 select_kids" name="nin">
											<option />0 <option />1 <option />2 <option />3 <option />4 <option />5
										</select>
									</div>
								</div>
							</div>
							<br/>
							<div class="span2">
								<button class="btn btn-success" type="submit">
									Reserva ahora!
								</button>
							</div>
						</div>
					</div>
				</form>
				<br />
				<br />
				<br />
				<br />
			</div>
		</div></div>
		<br>
		<br>
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
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="js/socialcount.min.js"></script>
		<script src="js/jquery.quicksand.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/global.js"></script>
	</body>
</html>