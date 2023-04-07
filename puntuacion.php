<?php
$puntaje = $_GET['puntaje'];


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
    <title>Home</title>
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
                    <img src="images/puntuacion-final.png" class="img-fluid  text-center img-lgo-instruccioness" alt="" style="margin-bottom: 5rem;">
                </div>

            </div>
            <!---->
            <div style="padding-top: 15%;"></div>
            <div class="row img-principal">
                <div class="col-12 div-content justify-content-center align-items-center d-none flex-column">
                    <img src="images/logoG.png" class="img-fluid text-center" alt="">
                </div>
                <div class="col-12">
                    <div class="col-12 d-flex justify-content-center d-lg-none">
                        <div class="contenedor-puntos">
                            <img src="images/cont-puntos.png" alt="">
                            <p class="puntos-text text-center p-0 m-0"><strong>PUNTOS</strong></p>
                            <h2 class="text-center cantidad-puntos p-0 m-0"><strong><?php echo $puntaje; ?></strong></h2>
                            <p class="text-center puesto-text p-0 m-0 "><strong>Puesto</strong></p>
                            <h2 class="text-center cantidad-puesto p-0 m-0 "><strong>29</strong></h2>

                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center texto-inicio-contenedor">
                        <img src="images/puntuacion_final/3.png" class="img-fluid text-center d-lg-none" alt="">
                        <div class="contenedor-puntos">
                            <p class="puntos-text-1 text-center p-0 m-0 d-none d-lg-block">PUNTOS</p>
                            <h2 class="text-center cantidad-puntos-1 p-0 m-0 d-none d-lg-block"><?php echo $puntaje; ?></h2>
                            <p class="text-center puesto-text-1 p-0 m-0 d-none d-lg-block">Puesto</p>
                            <h2 class="text-center cantidad-puesto-1 p-0 m-0 d-none d-lg-block">29</h2>
                            <img src="images/puntuacion_final/3.png" alt="Imagen" class="d-none d-lg-block">
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
            window.open("puntuacion_final.html", "_self");
        }
    </script>
</body>

</html>