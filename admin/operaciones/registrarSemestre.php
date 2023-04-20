
<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];

$buscar_sem = buscarSemestre($conexion);
while ($res_b_sem = mysqli_fetch_array($buscar_sem)) {


	$insertar = "INSERT INTO semestre(id,descripcion) VALUES ('$id','$descripcion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	


	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../semestres.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar usuario');
			window.history.back();
			</script>
			";
	}

}