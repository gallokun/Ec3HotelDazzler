<?php 
session_start();
include('conexion.php');
$user=$_POST['usuario'];
$pass=$_POST['password'];
$conectar=Conectarse();
$consulta="SELECT id_cliente, nombre_cli FROM clientes WHERE user='$user' and pass='$pass'";
$resultado=mysqli_query($conectar,$consulta);
//echo $resultado;
if(mysqli_num_rows($resultado))
{
	$array=mysqli_fetch_array($resultado);
	$_SESSION['id_cli']=$array['id_cliente'];
	$_SESSION['nombre_cli']=$array['nombre_cli'];
	header("Location:../index.php");
//	echo $resultado;
}
else
{
	header("Location:../login.php");
//	$_SESSION['id']=-1;
}
?>