<?php  
function buscarUser($conexion, $id){
    $sql = "SELECT * FROM clientestra WHERE id=$id";
    return mysqli_query($conexion, $sql);
}
?>