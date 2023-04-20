
<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";

$id_periodo_acad= $_POST['semestre']; //recibir datos y guardando en una variable 

$consulta = "INSERT INTO presente_periodo_acad (id_periodo_acad) VALUES ('$id_periodo_acad')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../presente_per_academico.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}

?>

