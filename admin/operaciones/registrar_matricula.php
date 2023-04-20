<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";

$id_periodo_acad = $_POST['id_periodo_acad']; //recibir datos y guardando en una variable $genero
$id_programa_estudio = $_POST['id_programa_estudio'];
$id_semestre = $_POST['id_semestre'];
$id_programacion_ud = $_POST['id_programacion_ud'];
$id_estudiante = $_POST['id_estudiante'];
$fecha_reg = $_POST['fecha_reg'];

$consulta = "INSERT INTO  matricula (id_periodo_acad,id_programa_estudio,id_semestre,id_programacion_ud,id_estudiante,fecha_reg ) VALUES ('$id_periodo_acad','$id_programa_estudio','$id_semestre','$id_programacion_ud','$id_estudiante','fecha_reg')";

$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../matricula.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}


?>