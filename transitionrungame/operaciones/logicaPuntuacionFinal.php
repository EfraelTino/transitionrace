<?php
include "../logica/conexion.php";

$id=$_POST['id'];
$dato1=$_POST['dato1'];
$dato2=$_POST['dato2'];
$dato3=$_POST['dato3'];
$dato4=$_POST['dato4'];
$dato5=$_POST['dato5'];


$sql_select = mysqli_query($dblink, "SELECT * FROM clientestra WHERE id='$id'") or die (mysqli_error($link));

$row= mysqli_num_rows($sql_select);
if($row > 0 ){
    $stmt = $dblink->prepare("UPDATE `clientestra` SET 
    `dato1`=?,
    `dato2`=?,
    `dato3`=?,
    `dato4`=?,
    `dato5`=?
    WHERE id = ?");
    if($stmt){
        echo "error";
    }
    $stmt -> bind_param(
        'sssssi',
        $dato1,
        $dato2,
        $dato3,
        $dato4,
        $dato5,
        $id,
    );
    $query_string = http_build_query([
        "id" => $id,
    ]);
    $encoded_query_string= base64_encode($query_string);
    header("location: ../ranking.php?q=".$encoded_query_string);
    $stmt -> execute();
    $stmt -> close();

}

