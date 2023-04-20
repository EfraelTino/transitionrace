
<?php
include "../include/conexion.php";
$descripcion = $_POST['descripcion'];
$id_programa_estudio = $_POST['programa_estudio'];
$id_modulo = $_POST['modulo_formativo'];
$id_semestre = $_POST['semestre'];
$creditos = $_POST['creditos'];
$horas = $_POST['horas'];
$tipo = $_POST['tipo'];
$orden = $_POST['orden'];


$insertar = "INSERT INTO unidad_didactica (descripcion, id_programa_estudio, id_modulo, id_semestre, creditos, horas, tipo, orden) VALUES ('$descripcion','$id_programa_estudio', '$id_modulo','$id_semestre','$creditos','$horas','$tipo','$orden')";
$ejecutar_insetar = mysqli_query($conexion, $insertar);


if ($ejecutar_insetar) {
	echo "<script>
			alert('Registro Exitoso');
			window.location= '../uni_didactica.php'
			</script>";
} else {
	echo "<script>
		alert('Error al registrar ');
		window.history.back();
		</script>";
}

?>