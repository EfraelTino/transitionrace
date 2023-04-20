<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";
$unidad_didactica = $_POST['unidad_didactica']; //recibir datos y guardando en una variable 
$id_docente= $_POST['id_docente'];
$id_periodo_acad= $_POST['id_periodo_acad'];
$id_programa_estudio= $_POST['id_programa_estudio'];
$id_semestre= $_POST['id_semestre'];
$id_programa_estudio= $_POST['cant_calificacion'];

$consulta = "INSERT INTO programacion_unidad_didactica (unidad_didactica,id_docente,id_periodo_acad,id_semestre,cant_calificacion) VALUES ('$unidad_didactica','$id_docente','$id_periodo_acad','$id_programa_estudio','$id_semestre','$cant_calificacion')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../programar_unidades.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar ');
        window.history.back();
    </script>";
}

?>
