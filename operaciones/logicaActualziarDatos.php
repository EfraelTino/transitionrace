<?php 

include "../logica/conexion.php";

$nombre=$_GET['nombre'];
$optica = $_GET['nombreoptica'];
$correo=$_GET['email'];
$telefono=$_GET['celular'];
$documento=$_GET['identificacion'];
$encargado=$_GET['token'];

echo "NOMBRE: ".$nombre. " OPTICA: ".$optica. " CORREO: ".$correo. " TELEFONO: ".$telefono ."DOCUMENTO: " . $documento . " ENCARGADO: ". $encargado;

// $sql = "UPDATE clientestra SET nombreusaurio='$nombre', nombrecliente='$optica', emailusuario='$correo', documento = '$documento', email='$encargado'";
// $ejec=  mysqli_query($dblink, $sql);
// if ($ejec_consulta) {
//     echo "<script>
// 					alert('Datos actualizados de manera Correcta');
// 					window.location= '../index.html';
// 				</script>
// 			";
// }else{
//     echo "<script>
// 					alert('Error al Actualizar Registro');
// 					window.history.back();
// 				</script>
// 			";
// }

