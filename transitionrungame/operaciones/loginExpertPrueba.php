<?php
include "../logica/conexion.php";

$token = $_POST['token'];
$documento = $_POST['documento'];
$id;

// $token = "otro";
// if (($token == "" || null) || ($documento == "" || null)) {
//     echo "<script>
//         alert('Uno de los campos es necesario');
//         window.history.back();
//          </script>
//         ";
// } else 
if($token && !$documento){
    echo "continuar al registro de documento con token crear ";

}
if($token && $documento){
    echo "Ya se encuentra en la base de datos y necesitamos actualizar";
}
if(!$token && $documento){
    echo "si el documento esta y el token no contiene ese documento no puede registrarse actualizar ";

}

if ($documento && $token == "" || null) {
    
    $sql_update = mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento ='$documento' ") or die(mysqli_error($link));
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
        header("location: ../ActualizarDatos.php?q=" . $encoded_query_string);
    } else {
        echo "<script>
        alert('El documento no se a encontrado en la BD');
        window.history.back();
         </script>
        ";
    }
} else if ($token && $documento) {
    $sql_insert = mysqli_query($dblink, "SELECT * FROM clientestra WHERE llabeglobal='$token'") or die(mysqli_error($link));
    $row = mysqli_num_rows($sql_insert);
    if ($row > 0) {
            $array = mysqli_fetch_array($sql_insert);
            $token = $array['llabeglobal'];
            $documento = $array['documento'];
            $tipo = ($array['tipo'] == null) ? $array['tipo'] : 1;
            $id = $array['id'];
            header("location: ../Registro.php?token=" . $token . "&id=" . $id . "&documento=" . $documento ."&tipo=".$tipo);
        } else {
            echo "<script>
                alert('Ingrese un token válido');
                window.history.back();
                 </script>
                ";
        }
}



// $sql = mysqli_query($dblink, "SELECT * FROM clientestra WHERE documento ='$documento' ") or die(mysqli_error($link));
// $row = mysqli_num_rows($sql);
// if ($row > 0) {
//     $array = mysqli_fetch_array($sql);
//     $token = $array['llabeglobal'];
//     $documento = $array['documento'];
//     $id = $array['id'];
//     header("location: ../Registro.php?token=" . $token . "&id=" . $id . "&documento=" . $documento);
// } else {
//     echo "<script>
//         alert('No se han encontrado un token');
//         window.history.back();
//          </script>
//         ";
// }

