<?php
include('conexion.php');
/*
if($errorConexionDB == false){
	$conectado->$conectado;
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$direccion=$_POST['direccion'];
	$ciudad=$_POST['ciudad'];
	$cp=$_POST['cp'];
	$estado=$_POST['estado'];
	$pais=$_POST['pais'];
	$consulta=$conectado->prepare("INSERT INTO clientes(nombres,apellidos,user,pass,email,tel,direccion,ciudad,cp,estado,pais)
		VALUES (?,?,?,?,?,?,?,?,?,?,?);");
	$consulta->bind_param('sssssssssss',$nombres,$apellidos,$user,$pass,$mail,$tel,$direccion,$ciudad,$cp,$estado,$pais);
	$consulta->execute();
	$consulta->close();
	//header("Location:../admin/clientes.php");

}
else {
	$consultaHabitaciones = '<tr id="sinDatos">
			<td colspan="5" class="centerTXT">ERROR AL CONECTAR CON LA BASE DE DATOS</td>
	   	</tr>';
}*/
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
	header("Location:../admin/clientes.php");
}
else
{
	echo "No se inserto nada";
	header("Location:registromalo.php");
}

	
?>