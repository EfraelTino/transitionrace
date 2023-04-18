<?php 
include "../../logica/conexion.php";

$usuario= $_POST['usuario'];
$password= $_POST['password'];

$sql= mysqli_query($dblink, "SELECT * FROM clientestra WHERE nombreusaurio = '$usuario' AND pass= '$password'") or die (mysqli_error($link));
$row=mysqli_fetch_array($sql);
if($row > 0 ){
    $id = $row['id'];
    session_start();
    $_SESSION['usuario_id'] = $row['id'];
    $_SESSION['username'] = $row['nombreusaurio'];
    header("location: ../dashboard.php");
}else{
    echo "<script>
        alert('Usuario y/o contraseña incorrecta');
        window.history.back();
    </script>";

}
?>