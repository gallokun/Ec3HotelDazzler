<?php
include('../includes/conexion.php');
$conectar = Conectarse();
$idcli = isset($_POST['idcli']) ? $_POST['idcli'] : '';
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sistema_reservacion";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

// Procesar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$estado = $_POST['estado'];
	$num_adu = $_POST['num_adu'];
	$num_niñ = $_POST['num_niñ'];
	$idcli = $_POST['idcli'];
	$habitacion = $_POST['habitacion'];

	// Preparar y ejecutar la consulta SQL para inserción de datos
	$sql = "INSERT INTO reservaciones (checkin, checkout,estado,num_adu,num_niñ,id_cliente,habitacion) VALUES ('$checkin', '$checkout','$estado','$num_adu','$num_niñ','$idcli','$habitacion')";

	if ($conn->query($sql) === TRUE) {
		header("Location:../index.php");
	} else {
		echo "Error al agregar datos: " . $conn->error;
	}
}

// Cerrar conexión
$conn->close();
?>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario para agregar datos</title>
	<link href="css/smoothness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="css/style.min.css" rel="stylesheet" />
	<link href="css/style-responsive.min.css" rel="stylesheet" />
	<link href="css/retina.css" rel="stylesheet" />
	<link type="text/css" href="css/master.css" rel="stylesheet" />

</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a id="main-menu-toggle" class="hidden-phone open">
					<i class="icon-reorder"></i>
				</a>
				<div class="row-fluid">
					<a class="brand span2" href="inicio.php"><span>Hotel</span></a>
				</div>
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">

						<li class="dropdown">
							<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
								<div class="user">
									<span class="hello">Agregar Reserva </span>

								</div>
							</a>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li>
							<a href="clientes.php"><span class="hidden-tablet">Regresar</span></a>
						</li>

					</ul>
				</div>
			</div>
			<div id="content">
				<div class="row-fluid">
					<div class="box span8">
						<div class="box-header">
							<h2><i class="icon-user"></i><span class="break"></span>Edicion</h2>
						</div>

						<div class="box-content">
							<form action="" method="post" id="" class="">
								<!-- <fieldset id="ocultos">
									<input type="hidden" name="idcli" value="<?php echo $idcli; ?>" />
								</fieldset>  -->
								<fieldset>
									<div class="span4">
										<label for="idcli">ID Cliente:</label>
										<span></span>
										<input type="text" id="idcli" name="idcli" value="<?php echo isset($_GET['idcli']) ? htmlspecialchars($_GET['idcli']) : ''; ?>">
									</div>
									<div class="span4">
										<p>checkin</p>
										<span></span>
										<input type="date" id="" name="checkin" placeholder="checkin" value="" />
									</div>
									<div class="span4">
										<p>checkout</p>
										<span></span>
										<input type="date" id="" name="checkout" placeholder="checkout" class="" value="" />
									</div>
									<div class="span4">
										<p>estado</p>
										<span></span>
										<select id="estado" name="estado">
											<option value="En espera">En espera</option>
											<option value="Tomada">Tomada</option>
											<option value="Cancelada">Cancelada</option>
										</select>
									</div>
									<div class="span4">
										<p>num_adu</p>
										<span></span>
										<input type="text" id="" name="num_adu" placeholder="num_adu" class="" value="" />
									</div>
									<div class="span4">
										<p>num_niñ</p>
										<span></span>
										<input type="text" id="" name="num_niñ" placeholder="num_niñ" class="" value="" />
									</div>
									<div class="span4">
										<label for="habitacion">Habitación:</label>
										<select id="habitacion" name="habitacion">
											<?php
											// Conexión a la base de datos
											$servername = "localhost";
											$username = "root";
											$password = "root";
											$dbname = "sistema_reservacion";

											$conn = new mysqli($servername, $username, $password, $dbname);

											if ($conn->connect_error) {
												die("Conexión fallida: " . $conn->connect_error);
											}

											$sql = "SELECT tipo FROM habitaciones";
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) {
													echo "<option value='" . $row["tipo"] . "'>" . $row["tipo"] . "</option>";
												}
											} else {
												echo "<option value=''>No hay habitaciones disponibles</option>";
											}

											$conn->close();
											?>
										</select>
									</div>

									<br>
									<br>
									<input type="submit" id="continuar" value="Continuar" class="btn btn-info" />
								</fieldset>
							</form>



						</div>
					</div><!--/span-->

				</div><!--/row-->
			</div>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.autosize.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
			<script src="js/core.min.js"></script>
</body>

</html>