<?php
session_start();
if (!isset($_SESSION['usuario_id']) || !isset($_SESSION['username'])) {
   header("location: index.html");
}
$user_id=$_SESSION['usuario_id'];
$user_name=$_SESSION['username'];
?>