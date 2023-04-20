<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";
$descripcion = $_POST['descripcion']; //recibir datos y guardando en una variable $usuario
$codigo = $_POST['codigo']; //recibir datos y guardando en una variable $docente

$consulta = "INSERT INTO cargo ( descripcion,codigo) VALUES ( '$descripcion','$codigo')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../cargo.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}

?>