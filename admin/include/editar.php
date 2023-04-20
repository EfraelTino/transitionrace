<?php
include "conexion.php";

$key = $_POST['llabeglobal'];
$nombre_optica = $_POST['nombrecliente'];
$email_optica = $_POST['email_optica'];
$recepcionista = $_POST['antencion'];
$nombre_usuario = $_POST['nombreusaurio'];
$documento_usuario = $_POST['documento'];
$estado_usuario = $_POST['estado'];
$tipo_usuario = $_POST['tipo'];
$nivel_usuario = $_POST['nivel'];
$id = $_POST['id'];
// echo "ID ". $id. " KEY ".$key." OPTICA ".$nombre_optica." EMAIL OPTICA ".$email_optica." RECEPCIONISTA ".$recepcionista." NOMBRE  ".$nombre_usuario." DOCUMENTO  ".$documento_usuario." ESTADO  ".$estado_usuario." TIPO  ".$tipo_usuario." NIVEL  ".$nivel_usuario;

$sql = mysqli_query($dblink, "SELECT * FROM clientestra WHERE id='$id'") or die(mysqli_error($link));
$row = mysqli_fetch_array($sql);
if ($row > 0) {
    $stmt = $dblink->prepare("UPDATE `clientestra` SET 
    `nombrecliente`=?,
    `email`=?,
    antencion=?,
    `nombreusaurio`=?,
    `documento`=?,
    `estado`=?,
    `tipo`=?,
    `nivel`=?
    WHERE id = ?");
    if (!$stmt) {
        echo "error";
    }
    $stmt->bind_param(
        'sssssiiii',
        $nombre_optica,
        $email_optica,
        $recepcionista,
        $nombre_usuario,
        $documento_usuario,
        $estado_usuario,
        $tipo_usuario,
        $nivel_usuario,
        $id
    );
    header("location: ../usuarios_registrados.php");
    $stmt->execute();
}else{
    echo "ERROR";
}
?>
<!-- ,
    `nombreusaurio`=?,
    `documento`=?,
    `estado`=?,
    `tipo`=?,
    `nivel`=? -->

<!-- ,
        $nombre_usuario,
        $documento_usuario,
        $estado_usuario,
        $tipo_usuario,
        $nivel_usuario,
        $id -->