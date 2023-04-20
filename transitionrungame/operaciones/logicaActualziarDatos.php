<?php

include "../logica/conexion.php";

$nombre = $_GET['nombre'];
$optica = $_GET['optica'];
$correo = $_GET['email'];
$telefono = $_GET['celular'];
$documento = $_GET['identificacion'];
$encargado = $_GET['encargado'];
$sql_select = mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento='$documento'") or die(mysqli_error($link));

$row = mysqli_num_rows($sql_select);
if ($row > 0){
	$sql_update = mysqli_query($dblink, "UPDATE clientestra SET nombreusaurio='$nombre', nombreusaurio='$optica', nombreusaurio='$correo', telefono='$telefono', nombreusaurio='$encargado' WHERE documento='$documento'") or die(mysqli_error($link));
	header("Location: ../actualizarDatos.php?estado=1");
}else{
	echo "Error";
}