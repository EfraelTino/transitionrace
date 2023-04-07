<?php
include "../logica/conexion.php";
$documento = $_POST['documento'];

//VALIDAREMOS QUE EL ESTADO HAYA CAMBIADO A 1;
//validaremos que el tipo sea expert
//VALIDAREMOS QUE EL DOCUMENTO SEA VALIDO
//VALIDAREMOS QUE EL DOCUMENTO EXISTA
$sql = mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento ='$documento' ") or die(mysqli_error($link));
$row = mysqli_num_rows($sql);
if ($row > 0) {
    $array = mysqli_fetch_array($sql);
    $token = $array['llabeglobal'];
    $documento = $array['documento'];
    $tipo = $array['tipo'];
    $estado= $array['estado'];
    $id = $array['id'];
    if($estado != 0 ){
        if($tipo == 1){
            header("location: ../Registro.php?token=" . $token . "&id=" . $id . "&documento=" . $documento . "&tipo=" . $tipo."&estado=".$estado);
        }else{
            echo "<script>
            alert('Usted no es expert, ingrese como usuario normal');
            window.location= '../Login.php';
             </script>
            ";
        }
        
    }else{
        echo "<script>
            alert('Su cuenta aún no a sido verificada');
            window.history.back();
             </script>
            ";
    }
} else {
    echo "<script>
            alert('Ingrese un documento válido');
            window.history.back();
             </script>
            ";
}
