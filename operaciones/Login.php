<?php
include "../logica/conexion.php";
date_default_timezone_set('America/Bogota'); 
session_start();
$documento = $_POST['documento'];
$veces=0;
$id="";
$ip = getRealIP();
getRealIP();
function getRealIP() {
 if (!empty($_SERVER['HTTP_CLIENT_IP'])){return $_SERVER['HTTP_CLIENT_IP'];}
 if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){return $_SERVER['HTTP_X_FORWARDED_FOR'];}
 return $_SERVER['REMOTE_ADDR'];
}
 if (mysqli_connect_errno()) {
    echo "NO se pudo conectar a la base : Error: ".mysqli_connect_error();
    exit();
 }

$sql =mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento ='$documento' ") or die(mysqli_error($link));
$row = mysqli_num_rows($sql);
if($row > 0){
    $array = mysqli_fetch_array($sql); 
    $id=$array['id'];
    $veces=$array['veces'];
    $estado=$array['estado'];
    $tipo = $array['tipo'];    
    if($estado >=1){
        if($veces>0){
            header("location: ../Instrucciones.php?documento=".$documento."&tipo=".$tipo);
        }else{
            $veces++;
        }
    }else{
        header("location: activacion.php");
    }
}else{
    header("location: noregistro.html");
}
$stmt= $dblink->prepare("UPDATE `clientestra` SET 
    `fechai` =?,
    `veces`=?,
    `ip`=?
    WHERE id= ?");
    if(!$stmt){
        echo "error";
    }
    $stmt->bind_param('ssss', 
    $fecha,
    $veces,
    $ip,
    $id);
    $stmt->execute();
    $stmt->close();

?>