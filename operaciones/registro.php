<?php
include "../logica/conexion.php";
date_default_timezone_set('America/Bogota');
$id = '';
$token = '';
$fechainicio = date('m-d-Y h:i:s', time());
$nombre_usuario = $_GET['nombre'];
$documento = $_GET['identificacion'];
$email_usuario = $_GET['email'];
$telefono = $_GET['celular'];
$encargado = $_GET['encargado'];
$optica = $_GET['optica'];

if (isset($_GET['token']) && isset($_GET['id'])) {
    $token = $_GET['token'];
    $id = $_GET['id'];
} else {
}



// DATOS ADICIONALES
$estado = 0;
$ip = "";
$fecha_ultimo = "";
$puntuacion = "";
$plus = "";
$tipo = 0;

$ip = getRealIP();
getRealIP();
function getRealIP()
{
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

// hacemos un select de un campo
$sql_select = mysqli_query($dblink, "SELECT llabeglobal ,estado FROM clientestra WHERE id='$id'") or die(mysqli_error($link));
$row = mysqli_num_rows($sql_select);
if ($row > 0) {
    $array = mysqli_fetch_array($sql_select);
    $token_global = $array['llabeglobal'];
    $estado = $array['estado'];
} else {
    echo "<script>
    window.history.back();
    alert('Token inválido');
        </script>";
}
if($estado =! 0){
    header("location: ../Login.php?estado=".$estado);
}else{
    $sql_insertar = "INSERT INTO clientestra (llabeglobal, nombreusaurio, documento, emailusuario, telefono, antencion, estado, ip, fechai, tipo, pluss ) VALUES ('$token', '$nombre_usuario', '$documento', '$email_usuario', '$telefono', '$encargado', '$estado', '$ip', '$fechainicio', '$tipo', '$plus')";

    if ($dblink->query($sql_insertar) === TRUE) {
        echo "<script>
        alert('Registro Exitoso');
        </script>";
    } else {
        echo "<script>
        alert('Error al registrar usuario <?php . $dblink->error; ?>');
        window.history.back();
        </script>
        ";
    }
    
}
