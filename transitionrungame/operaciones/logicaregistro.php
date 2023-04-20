<?php
include "../logica/conexion.php";
date_default_timezone_set('America/Bogota');
$token = $_GET['token'];
$fechainicio = date('m-d-Y h:i:s', time());
$nombre_usuario = $_GET['nombre'];
$documento = $_GET['identificacion'];
$email_usuario = $_GET['email'];
$telefono = $_GET['celular'];
$encargado = $_GET['encargado'];
$optica = $_GET['optica'];


// DATOS ADICIONALES
// VALIDAR QUE EL TOKEN EXISTA 
// SI EL TOKEN NO EXISTE SE LE VA A ASIGNAR UN POR DEFAULT
// QUE LA IDENTIFICACION NO ESTE EN LA BASE DE DATOS -> NO SE DEBEN DE REPETIR
// QUE EL ESTADO POR DEFAULT SEA 0
// si ingresa su token el tipo dede ser 1
// el estado en ambos es igual a 0

$estado = 0;
$ip = "";
$tipo = 0;

$ip = getRealIP();
getRealIP();
function getRealIP()
{
    // OBTENGO LA DIRECCION IP DEL CLIENTE QUE INICIA SESION
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $_SERVER['REMOTE_ADDR'];
}
if (mysqli_connect_errno()) {
    echo "NO se pudo conectar a la base : Error: " . mysqli_connect_error();
    exit();
}
// hacemos un select cuando trae el token
$sql_select = mysqli_query($dblink, "SELECT * FROM clientestra WHERE llabeglobal='$token'") or die(mysqli_error($link));

$row = mysqli_num_rows($sql_select);
if ($row > 0) {
    $sql_select_identidad = mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento='$documento'");
    $row_documento = mysqli_num_rows($sql_select_identidad);
    if ($row_documento > 0) {
        header("Location: ../registro.php?estado=1");
        exit();
    } else {
        $tipo = 1;
        $_sql_insert_cn_token = mysqli_query($dblink, "INSERT INTO clientestra (llabeglobal, nombrecliente, nombreusaurio, documento, emailusuario, telefono, antencion, estado, ip, fechai, tipo) VALUES ('$token', '$optica', '$nombre_usuario', '$documento', '$email_usuario', '$telefono', '$encargado', '$estado', '$ip', '$fechainicio', '$tipo' )");
        header("Location: ../registro.php?estado=3");
        exit();
    }
} else {
    $sql_select_identidad = mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento='$documento'");
    $row_documento = mysqli_num_rows($sql_select_identidad);
    if ($row_documento > 0) {

        $array = mysqli_fetch_array($sql_select_identidad);
        $tipo_db = $array['tipo'];
        if ($tipo_db == 1) {
            header("Location: ../registro.php?estado=1");
            exit();
        } else {
            header("Location: ../registro.php?estado=2");
            exit();
        }
    } else {
        $tipo = 0;
        $token = "OTRO";
        $sql_insertar_normal = mysqli_query($dblink, "INSERT INTO clientestra (llabeglobal, nombrecliente, nombreusaurio, documento, emailusuario, telefono, antencion, estado, ip, fechai, tipo ) VALUES ('$token', '$optica', '$nombre_usuario', '$documento', '$email_usuario', '$telefono', '$encargado', '$estado', '$ip', '$fechainicio', '$tipo')");;
        
        header("Location: ../registro.php?estado=4");
        exit();
    }
}
