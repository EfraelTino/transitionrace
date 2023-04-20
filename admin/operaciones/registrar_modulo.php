
<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";

$descripcion = $_POST['descripcion']; //recibir datos y guardando en una variable $genero
$nro_modulo = $_POST['nro_modulo'];
$id_programa_estudio = $_POST['id_programa_estudio'];


$consulta = "INSERT INTO modulo_profesional  (descripcion,nro_modular,id_programa_estudio) VALUES ('$descripcion','$nro_modulo','$id_programa_estudio')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../modulo_formativo.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}


?>