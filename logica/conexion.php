<?php 
   /*
   $host = "localhost";
   $user = "u960900126_triviaeuro";
   $pass = "Cocorilow.1";
   $database = "u960900126_eurotrivia";
   $dblink = mysqli_connect($host, $user, $pass, $database);

   if($dblink){
      }else{echo "NO ESTA CONECTADO";
   }
   */
   $host = "localhost";
  //  $user = "u960900126_Efrael";
   $user = "root";
  //  $pass = "AdminTransitionRun2023";
   $pass = "";
  //  $database = "u960900126_transitionsrun";
   $database = "transitionrun";
   $dblink = mysqli_connect($host, $user, $pass, $database);
   if($dblink){
    //  echo "conectadosss";
   }else{
    //  echo "NO CONECTADO";
   }
?>
