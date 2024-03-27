<?php
include ('../includes/conexion.php');
$id = $_GET['idcli'];
$nombres = $_POST['nombres'];
$user = $_POST['user'];

$email = $_POST['email'];
$tel = $_POST['tel'];
echo "$id<br/>";
echo "$nombres<br/>";
echo "$user <br/>";
echo "$email <br/>";
echo "$tel <br/>";
$conectar = Conectarse();
$consulta = "UPDATE clientes SET nombre_cli='$nombres', user='$user', email='$email', 
tel='$tel' WHERE id_cliente='$id'";
$resultado = mysqli_query($conectar,$consulta);
if ($resultado==1) {
	header("Location:clientes.php");
	echo $resultado;
	echo "Se modifico";
} else {
	echo "No se borro";

}
?>