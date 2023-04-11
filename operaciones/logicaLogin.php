<?php
include "../logica/conexion.php";
date_default_timezone_set('America/Bogota');
session_start();
$documento = $_POST['documento'];
$veces = 0;
$fechainicio = date('m-d-Y h:i:s', time());
$id = "";
//VALIDAREMOS QUE EL ESTADO HAYA CAMBIADO A 1;
//validaremos que el tipo sea expert
//VALIDAREMOS QUE EL DOCUMENTO SEA VALIDO
//VALIDAREMOS QUE EL DOCUMENTO EXISTA


if (mysqli_connect_errno()) {
    echo "NO se pudo conectar a la base : Error: " . mysqli_connect_error();
    exit();
}

$sql = mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento ='$documento' ") or die(mysqli_error($link));
$row = mysqli_num_rows($sql);
if ($row > 0) {
    $array = mysqli_fetch_array($sql);
    $id = $array['id'];
    $estado = $array['estado'];
    $tipo = $array['tipo'];
    $veces = $array['veces'];
    if ($estado != 0) {
        // $veces++;
        $query_string = http_build_query([
            "token" => $token,
            "id" => $id,
            "documento" => $documento,
            "tipo" => $tipo,
            "telefono" => $telefono,
            "veces" => $veces,
        ]);
        $encoded_query_string = base64_encode($query_string);
        header("location: ../instrucciones.php?q=" . $encoded_query_string);
    } else {
        // PARA LA ACTIVACION
        header("Location: ../login.php?error=2");
        exit();
    }
} else {
    // NO SE A REGISTRADO
    header("Location: ../login.php?error=1");
        exit();
}
$stmt = $dblink->prepare("UPDATE `clientestra` SET 
    `fechai` =?
    WHERE id= ?");
if (!$stmt) {
    echo "error";
}
$stmt->bind_param(
    'ss',
    $fechainicio,
    $id
);
$stmt->execute();
$stmt->close();
