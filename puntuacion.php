<?php
require "logica/conexion.php";
date_default_timezone_set('America/Bogota');
$fechaultimo = date('m-d-Y h:i:s', time());
$preguntas_correctas = $_GET['preguntas'];
$scoreFinal = $_GET['puntaje'];
$currentLapTime = $_GET['vuelta'];
$id = $_GET['id'];
// setear las palabras resevadas o caracteres especiales
$sql = mysqli_query($dblink, "SELECT * FROM clientestra WHERE id ='$id' ") or die(mysqli_error($link));
$row = mysqli_num_rows($sql);
$puntuacion_db = 0;
if ($row) {
    $array = mysqli_fetch_array($sql);
    $puntuacion_db = $array['puntuacion'];
    if ($scoreFinal > $puntuacion_db) {
        $stmt = $dblink->prepare("UPDATE `clientestra` SET 
    `puntuacion` = ?, 
    `preguntas` = ?,
    `fechau` = ?
    WHERE id = ?");
        if (!$stmt) {
            echo "error";
        }
        $stmt->bind_param(
            'ssss',
            $scoreFinal,
            $preguntas_correctas,
            $fechaultimo,
            $id
        );
        $stmt->execute();
        $stmt->close();
    }
}
$consulta = "SELECT * FROM `clientestra` WHERE puntuacion > 0 ORDER BY `puntuacion` DESC";
$resultado = $dblink->query($consulta);
$puesto = 0;
$idc;

while ($row = $resultado->fetch_assoc()) {
    $puesto++;
    $idc = $row['id'];
    if ($idc == $id) {
        break;
    }
}
//echo $fechaultimo;
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/3.css">
    <link rel="icon" type="image/png" href="images/favicon.ico" />
    <title>Score</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center">
        <video class="background-video" autoplay muted loop style="left: -0%;">
            <source src="images/bg-video.mp4" type="video/mp4">
        </video>
        <div class="div-background"></div>
        <div class="container">
            <div class="row">
                <div class="col div-content justify-content-center align-items-center d-flex flex-column">
                    <img src="images/logo.png" class="img-fluid  text-center img-lgo-instrucciones" alt="">
                    <img src="images/puntuacion-final.png" class="img-fluid  text-center img-lgo-instruccioness" alt="">
                </div>

            </div>
            <div class="row img-principal" style="margin-top: 0 !important;">
                <div class="col-12 div-content justify-content-center align-items-center d-none flex-column">
                    <img src="images/logoG.png" class="img-fluid text-center" alt="">
                </div>
                <div class="col-12">
                    <div class="col-12 d-flex justify-content-center d-md-none">
                        <div class="contenedor-puntos d-md-none">
                            <img src="images/cont-puntos.png" alt="">
                            <div style=" position: absolute; top: 0; left: 50%;transform: translate(-50%, 10%);">
                                <p class="puntos-text text-center p-0 m-0"><strong>PUNTOS</strong></p>
                                <h2 class="text-center cantidad-puntos p-0 m-0"><strong><?php echo $scoreFinal > $puntuacion_db ? $scoreFinal : $puntuacion_db;?></strong></h2>
                                <p class="text-center puesto-text p-0 m-0 "><strong>Puesto</strong></p>
                                <h2 class="text-center cantidad-puesto p-0 m-0 "><strong><?php echo $puesto; ?></strong></h2>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 d-none d-md-flex justify-content-center texto-inicio-contenedor">
                        <div class="contenedor-puntos">
                            <div class="cons-t">
                                <p class="puntos-text2 text-center p-0 m-0"><strong>PUNTOS</strong></p>
                                <h2 class="text-center cantidad-puntos2 p-0 m-0"><strong><?php echo $scoreFinal > $puntuacion_db ? $scoreFinal : $puntuacion_db;?></strong></h2>
                                <p class="text-center puesto-text2 p-0 m-0 "><strong>Puesto</strong></p>
                                <h2 class="text-center cantidad-puesto2 p-0 m-0 "><strong><?php echo $puesto; ?></strong></h2>
                            </div>
                            <img src="images/puntuacion_final/3.png" alt="Imagen" class="img-fluid">
                        </div>
                        <p class="texto-inicio-excelente">Excelente carrera, recuerda que <br>los lentes Transitions®
                            son inteligentes a la luz <br>y te protegen de los rayos UV y la luz nociva.<br> Además
                            puedes tener la mejor tecnología Transitions® con<br> las mejores monturas de las marcas que
                            ofrece Luxottica <br>para un estilo único como OAKLEY, RAYBAN y MICHAEL KORS.</p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn" id="boton" onclick="openLink();">
                        <img src="images/form/btn_continuar.png" class="img-fluid" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mb-3 pl-3">
        <div class="row m-0 p-0">
            <div class="col">
                <p class="m-0 text-footer">Copyright ©️ 2022 Essilor Latinoamérica - Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <script>
        function openLink() {
            window.open("puntuacion_final.php", "_self");
            <?php
            $query_string = http_build_query([
                "id" => $id,
            ]);
            $encode_query_string = base64_encode($query_string);

            ?>
            window.location.href = "puntuacion_final.php<?php echo '?q=' . $encode_query_string ?>";
        }
    </script>
</body>

</html>