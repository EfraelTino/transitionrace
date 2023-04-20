
<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";
$id = $_POST['id']; //recibir datos y guardando en una variable $genro
$genero = $_POST['genero']; //recibir datos y guardando en una variable $genero



$consulta = "INSERT INTO genero (genero) VALUES ('$genero')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../genero.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}


?>