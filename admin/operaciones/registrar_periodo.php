<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";
$nombre = $_POST['nombre']; //recibir datos y guardando en una variable 
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$director = $_POST['director'];
$fechas_actas = $_POST['fecha_actas'];


$consulta = "INSERT INTO periodo_academico (nombre,fecha_inicio,fecha_fin,director,fecha_actas) VALUES ('$nombre','$fecha_inicio','$fecha_fin','$director','$fechas_actas')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../periodo_academico.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}

?>