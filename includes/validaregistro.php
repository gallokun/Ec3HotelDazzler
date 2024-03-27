<?php
include('conexion.php');
$nombres=$_POST['nombre_cli'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$tel=$_POST['tel'];


	
	echo "$user <br/>";
	echo "$pass <br/>";
	echo "$email <br/>";
	echo "$tel <br/>";
$conectar=Conectarse();
$consulta="INSERT INTO clientes (nombre_cli, user, pass, email, tel)
VALUES ('$nombres','$user','$pass','$email','$tel')";
$resultado=mysqli_query($conectar,$consulta);
echo $resultado;
if($resultado==1)
{
	echo "ya la hicimos";
	header("Location:../cuentanueva.php");
	//header("Location:../cuentanueva.php");
}
else
{
	echo "No se inserto nada";
	header("Location:registromalo.php");
}
	
	
?>