<?php

include "../logica/conexion.php";
$documento = $_POST['documento'];
$token = $_POST['token'];
//DNI OBLIGATORIO
// TOKEN NO ES OBLIGATORIO
//NO IMPORTA SI ESTE ACTIVO O DESACTIVO PUEDE ACTUALIZAR SUS DATOS
// SE TIENE QUE ACTUALIZAR TANTO DEL EXPERT COMO DEL NORMAL  

if ($documento && $token) {
    $sql_update = mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento ='$documento' AND llabeglobal='$token'") or die(mysqli_error($link));

    $row = mysqli_num_rows($sql_update);
    if ($row > 0) {
        $array = mysqli_fetch_array($sql_update);
        $token = $array['llabeglobal'];
        $documento = $array['documento'];
        $id = $array['id'];
        $optica = $array['nombrecliente'];
        $email_personal = $array['emailusuario'];
        $nombreusuario = $array['nombreusaurio'];
        $telefono = $array['telefono'];
        $encargado = $array['email'];
        $query_string = http_build_query([
            "token" => $token,
            "id" => $id,
            "documento" => $documento,
            "optica" => $optica,
            "emailusuario" => $email_personal,
            "telefono" => $telefono,
            "encargado" => $encargado,
            "nombreusuario" => $nombreusuario,
        ]);
        $encoded_query_string = base64_encode($query_string);
        header("location: ../actualizarDatos.php?q=" . $encoded_query_string);
    } else {
        echo "<script>
                alert('LOS DATOS NO COINCIDEN');
                window.history.back();
                 </script>
                ";
    }
} 

else if ($documento && ($token == "" || null)) {
    $sql_identificacion = mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento ='$documento'") or die(mysqli_error($link));
    $row = mysqli_num_rows($sql_identificacion);

    if ($row > 0) {
        $array = mysqli_fetch_array($sql_identificacion);
        $token = $array['llabeglobal'];
        $documento = $array['documento'];
        $id = $array['id'];
        $optica = $array['nombrecliente'];
        $email_personal = $array['emailusuario'];
        $nombreusuario = $array['nombreusaurio'];
        $telefono = $array['telefono'];
        $encargado = $array['email'];
        $query_string = http_build_query([
            "token" => $token,
            "id" => $id,
            "documento" => $documento,
            "optica" => $optica,
            "emailusuario" => $email_personal,
            "telefono" => $telefono,
            "encargado" => $encargado,
            "nombreusuario" => $nombreusuario,
        ]);
        $encoded_query_string = base64_encode($query_string);
        header("location: ../actualizarDatos.php?q=" . $encoded_query_string);
    }else{
        header("Location: ../formularioActualizar.php?estado=0");
        exit();

    }
}
