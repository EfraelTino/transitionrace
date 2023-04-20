<?php
session_start();
if (!isset($_SESSION['usuario_id']) ) {
   header("location: index.html");
}
$user_id=$_SESSION['usuario_id'];
?>