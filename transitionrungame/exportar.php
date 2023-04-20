

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
<table border="1" cellspacing="1" cellpadding="2" width="100%">
     <caption style=" background-color: MediumPurple; font-size: 20px; color: gray; "><b>REGISTRO DE INSCRITOS EUROFARMA.</b> </caption>
     <tr>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">POS</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">LLAVE GLOBAL</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">EMAIL OPTICA</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">NOMBRE OPTICA</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">PAIS</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">REGISTRO APP</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">NO REGISTRADO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">POINTZ</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">NOMBRE JUGADOR</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">DOCUMENTO JUGADOR</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">EMAIL JUGADOR</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">TELEFONO USUARIO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">PERSONAL QUE ATENDIO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">ESTADO JUGADOR</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">IP</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">FECHA INICIO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">FECHA ULTIMO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">PUNTUACION JUGADOR</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">PREGUNTAS</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">01 NUMERO CERTIFICADO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">02 NUMERO CERTIFICADO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">03 NUMERO CERTIFICADO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">04 NUMERO CERTIFICADO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">05 NUMERO CERTIFICADO</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">ADICIONAL</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">TIPO JUGADOR</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">VECES JUGADOS</td>
        <td style=" background-color: MediumPurple; font-size: 15px; color: white;">NIVEL JUGADOR</td>
     
     </tr>
   <?php
    require 'logica/conexion.php';
    header('Content-Type: application/vnd.ms-excel;');//header('Content-Type: application/vnd.ms-excel;charset= "iso-8859-15"');
    header('Content-Disposition: attachment;filename="transitionRaceRegistro.xls"');
    //EXPORTAR TODOS LOS DATOS
    $consulta = "select DISTINCT id,documento,llabeglobal,email,nombrecliente,pais, registroapp,noregistrado,pointz, nombreusaurio,emailusuario,telefono,antencion,estado,ip,fechai,fechau,puntuacion,preguntas,dato1,dato2,dato3,dato4,dato5,tipo,pluss,veces, nivel from clientestra WHERE documento != '' ORDER BY puntuacion DESC";
    $resultado = $dblink->query($consulta);
    $pos=0;
    while ($row = $resultado-> fetch_assoc()){
        $pos++;
    ?>  
               <td><?php echo $pos;?></td>
            
               <td><?php echo $row ['llabeglobal']; ?></td>
               <td><?php echo $row ['email']; ?></td>
               <td><?php echo $row ['nombrecliente']; ?></td>
               <td><?php echo $row ['pais']; ?></td>
               <td><?php echo $row ['registroapp']; ?></td>
               <td><?php echo $row ['noregistrado']; ?></td>
               <td><?php echo $row ['pointz']; ?></td>
               <td><?php echo $row ['nombreusaurio']; ?></td>
               <td><?php echo $row ['documento']; ?></td>
               <td><?php echo $row ['emailusuario']; ?></td>
               <td><?php echo $row ['telefono']; ?></td>
               <td><?php echo $row ['antencion']; ?></td>
               <td><?php echo $row ['estado']; ?></td>
               <td><?php echo $row ['ip']; ?></td>
               <td><?php echo $row ['fechai']; ?></td>
               <td><?php echo $row ['fechau']; ?></td>
               <td><?php echo $row ['puntuacion']; ?></td>
               <td><?php echo $row ['preguntas']; ?></td>
               <td><?php echo $row ['dato1']; ?></td>
               <td><?php echo $row ['dato2']; ?></td>
               <td><?php echo $row ['dato3']; ?></td>
               <td><?php echo $row ['dato4']; ?></td>
               <td><?php echo $row ['dato5']; ?></td>
               <td><?php echo $row ['pluss']; ?></td>
               <td><?php echo $row ['tipo']; ?></td>
               <td><?php echo $row ['veces']; ?></td>
               <td><?php echo $row ['nivel']; ?></td>
               
               </tr>
            <?php 
            }

    ?>
