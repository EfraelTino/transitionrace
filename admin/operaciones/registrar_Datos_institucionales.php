
<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$cod_modular = $_POST['cod_modular'];
$ruc = $_POST['ruc'];
$nombre_institucion= $_POST['nombre_institucion'];
$departamento = $_POST['departamento'];
$provincia = $_POST['provincia'];
$distrito = $_POST['distrito'];
$direccion = $_POST['direccion'];
$telofono = $_POST['telofono'];
$email = $_POST['correo'];
$nro_resolucion = $_POST['nro_resolucion'];

$b_insti = buscarDatosInstByCodModular($conexion, $cod_modular);
$c_r_b_estudiante = mysqli_num_rows($b_insti);
if ($c_r_b_estudiante == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO datos_institucionales (cod_modular, ruc, nombre_institucion, departamento, provincia, distrito, direccion, telofono, correo, nro_resolucion) VALUES ('$cod_modular','$ruc','$nombre_institucion', '$departamento', '$provincia', '$distrito', '$direccion', '$telofono', '$email', '$nro_resolucion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	// registrar usuario
	if ($ejecutar_insetar) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../Datos_institucionales.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar usuario');
			window.history.back();
			</script>
			";
	}
}else{
	echo "<script>
			alert('El estudiante ya existe, error al guardar');
			window.history.back();
			</script>
			";
}

?>

