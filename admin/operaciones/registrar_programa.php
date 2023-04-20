<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";

$codigo= $_POST['codigo']; //recibir datos y guardando en una variable 
$tipo= $_POST['tipo'];
$nombre= $_POST['nombre'];
$resolucion= $_POST['resolucion'];

$consulta = "INSERT INTO programa_estudios (codigo,tipo,nombre,resolucion) VALUES ('$codigo','$tipo','$nombre','$resolucion')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../unidades_didacticas.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}

?>
