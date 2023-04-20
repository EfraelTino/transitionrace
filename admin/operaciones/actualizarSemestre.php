<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE semestre SET id='$id', descripcion='$descripcion' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../semestre.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Actualizar Registro');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);
?>