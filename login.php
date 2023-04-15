<?php
include "logica/conexion.php";
if (isset($_GET["error"]) && $_GET["error"] == 1) {
    $mensaje_uno = "Error 1: No se ha registrado";
}
if (isset($_GET["error"]) && $_GET["error"] == 2) {
    $mensaje_dos = "Error 2: Problema de activación";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/modal.css">

    <link rel="icon" type="image/png" href="images/favicon.ico" />
    <title>Log In</title>
</head>

<body>
    <video class="background-video" autoplay muted loop style="left: -0%;">
        <source src="images/bg-video.mp4" type="video/mp4">
    </video>
    <div class="div-background"></div>
    <nav class="navbar justify-content-end mt-4">
        <a class="btn btn-menu mr-3 p-3 ">es</a>
        <a class="btn btn-menu mr-3 p-3 ">en</a>
        <a class="btn btn-menu mr-3 p-0 btn-oc-modal-terminos"><img src="images/img-menu.png" class="img-fluid" alt=""></a>
        <div class="row justify-content-end">
            <div class="col-12 col-md-4 div-nav-terminos">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="btn btn-terminos closed btn-oc-modal-terminos">X</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-terminos" data-toggle="modal" data-target="#modalTerminos">TÉRMINOS Y
                            CONDICIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-terminos" data-toggle="modal" data-target="#modalMecanica">MECANICA</a>
                    </li>

                </ul>
                <!-- Modal terminos y condiciones-->
                <div class="modal fade" id="modalTerminos" tabindex="-1" aria-labelledby="modalTerminosLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header  d-block align-items-center justify-content-center">
                                <h5 class="modal-title  text-white text-titulo-terminos" id="modalTerminosLabel">
                                    TÉRMINOS Y CONDICIONES</h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col p-4">
                                        <p class="text-white  text-terminos">TÉRMINOS Y CONDICIONES APLICABLES A LA
                                            ACTIVIDAD “TRANSITIONS® RUN” ESSILOR LUXOTTICA
                                            (DE AHORA EN ADELANTE TRANSITIONS® Y ESSILOR O EL ORGANIZADOR) Los términos
                                            y
                                            condiciones (“T&C”) descritos a continuación establecen las condiciones bajo
                                            las
                                            cuales se regirá la Actividad “Transitions® Run” (la “Actividad”) la cual
                                            será
                                            responsabilidad de ESSILOR LUXOTTICA. Al decidir participar en la Actividad,
                                            todos
                                            los participantes de la misma aceptan plenamente el contenido de estos T&C,
                                            así como
                                            su carácter vinculante. En ese sentido, la participación en la Actividad
                                            implica la
                                            decisión del participante de obligarse por estos T&C y por las decisiones
                                            que tome
                                            ESSILOR LUXOTTICA respecto a la misma, las cuales tendrán carácter
                                            definitivo en
                                            todos los asuntos relacionados con el mismo. Los participantes aceptan y
                                            reconocen
                                            que los premios que se otorgarán en virtud de la Actividad, únicamente serán
                                            efectivamente entregados si los participantes que resulten ganadores cumplen
                                            estrictamente con todos los términos, condiciones y requisitos previstos en
                                            estos
                                            T&C. Bajo ninguna circunstancia los premios otorgados en esta Actividad a
                                            los
                                            ganadores que cumplan con los requisitos aquí establecidos podrán ser
                                            canjeables o
                                            sustituibles por dinero, o un premio diferente al aquí ofrecido, ni total ni
                                            parcialmente, salvo decisión en este sentido por parte de ESSILOR LUXOTTICA.
                                            En este
                                            sentido, los participantes entienden que los Premios que se otorguen a los
                                            ganadores
                                            en virtud del desarrollo de la presente Actividad serán personales e
                                            intransferibles. A fin de reclamar el premio previsto para la Actividad, los
                                            participantes que resulten ganadores deberán contar con todos los documentos
                                            requeridos para dicho fin. La falta de presentación de los mencionados
                                            documentos
                                            por parte de los posibles ganadores, dará lugar a su descalificación
                                            automática de
                                            la Actividad. 1. NOMBRE DE LA ACTIVIDAD: “Transitions® Run” 2. OBJETIVO:
                                            Incrementar
                                            y fomentar las ventas de productos de la marca Lentes Transitions® y
                                            monturas
                                            Essilor Luxottica. Así mismo generar beneficios para los participantes y
                                            conocimiento sobre el portafolio de productos de la marca de lentes
                                            Transitions® y
                                            Essilor Luxottica 3. CUBRIMIENTO GEOGRÁFICO La Actividad será válida
                                            únicamente en
                                            los países xxx. 4. Quiénes pueden participar 4.1. Pueden participar en la
                                            Actividad
                                            todos los laboratorios, cadenas de ópticas y ópticas independientes (en
                                            adelante
                                            “Los Participantes” o “Los Experts”). Los Participantes para poder concursar
                                            en la
                                            Actividad, deberán realizar una compra mínima previamente informada por
                                            Essilor y
                                            calculada sobre las compras realizadas por el Participante en últimos meses
                                            de
                                            Lentes Transitions® en cualquier material o diseño disponible. Los
                                            participantes que
                                            no estén de acuerdo con estos términos y condiciones deberán abstenerse de
                                            participar en la Actividad. 4.2. Los asesores comerciales. que tengan
                                            asignados
                                            clientes que permitan el registro de los participantes en la base de datos
                                            establecida para la actividad. Y los asesores comerciales de Servioptica
                                            S.A.S. que
                                            tengan asignados clientes que se encuentren dentro del programa Essilor
                                            Experts. Al
                                            participar en la Actividad y eventualmente recibir algún premio, los
                                            participantes
                                            entienden que no existe ninguna otra obligación por parte del Organizador
                                            fuera de
                                            lo aquí previsto, por lo que, conviene liberar y eximir de responsabilidad
                                            al
                                            Organizador, y sus respectivas empresas matrices, subordinadas y
                                            subsidiarias, así
                                            como sus empleados y directivos y cualquier otra persona directamente
                                            involucrada en
                                            la actividad de toda responsabilidad que en cualquier forma pueda surgir
                                            directa o
                                            indirectamente de su participación en la Actividad y/o en el uso del premio.
                                            5.
                                            Vigencia de la Actividad La Actividad iniciará el día primero (1) de marzo
                                            de 2023 a
                                            las xxx horas y finalizará el día treinta (30) de junio de 2023 a las xxx
                                            horas. El
                                            Organizador se reserva el derecho de suspender temporalmente o de manera
                                            indefinida
                                            la actividad objeto de estos T&C, en caso de detectar o de conocer
                                            irregularidades o
                                            fraudes en el desarrollo de la misma, o en caso de presentarse algún
                                            acontecimiento
                                            de fuerza mayor o caso fortuito que afecte en forma grave su ejecución.
                                            Estas
                                            circunstancias se comunicarán públicamente mediante cualquier medio
                                            dispuesto para
                                            tal fin y previamente informado por los Participantes quienes igualmente
                                            exoneran de
                                            responsabilidad al Organizador MECÁNICA PARA PARTICIPAR EN LA ACTIVIDAD: Los
                                            participantes a través de los asesores de ventas le informarán a cada uno de
                                            sus
                                            clientes quedando registrados en una base de datos. Los clientes inactivos o
                                            que no
                                            manejan vínculos comerciales actuales con Essilor Luxottica no tendrán
                                            acceso para
                                            poder participar. Cada país participante en el plan de incentivos
                                            (Transitions Run)
                                            tendrá una base de datos, así como un escalafón de puntajes independientes.
                                            Por cada
                                            país se tendrán divididos los clientes en 4 segmentos. Cada segmento
                                            corresponde a
                                            los clientes según la recurrencia y cuantías de compras que realizan mes a
                                            mes. El
                                            plan de incentivos se dividirá en 4 momentos de participación, contemplando
                                            una
                                            duración de 4 meses (del 1 de marzo al 30 de junio del 2023). La primera
                                            semana de
                                            cada mes se revisarán resultados del mes anterior y Essilor entregará las
                                            bases de
                                            datos completas por cada país con la información y si es el caso cambios de
                                            categoría. La 2da, 3ra y 4ta semana de cada mes, se abrirá la plataforma
                                            para que
                                            puedan ingresar a participar a una plataforma de recorrido llamada
                                            Transitions® Run.
                                            Cada cliente participante, recibirá de parte de su asesor comercial un único
                                            código
                                            por mes que le dará la oportunidad de ingresar a participar en la plataforma
                                            Transitions® Run las veces que quiera en el periodo determinado. Los códigos
                                            serán
                                            entregados mes a mes, debido a que cada cliente tendrá un código diferente
                                            para
                                            ingresar en cada uno de los meses de participación. Por cada ingreso a la
                                            plataforma, el participante, utilizando el código que le corresponde, el
                                            juego dará
                                            3 vidas, (oportunidades de participación) dentro de la plataforma
                                            Transitions® Run.
                                            Al finalizar las 3 vidas, el juego tomará el mejor puntaje rankeado durante
                                            su
                                            participación y éste se registrará en el Score de cada país. (Entre más
                                            ingresos a
                                            participar, más puntos se podrán obtener y el cliente podrá ir en ascenso en
                                            el
                                            ranking nacional) Dependiendo la segmentación donde se encuentre el cliente,
                                            recibirá una cantidad de códigos diferentes para participar, esto con el fin
                                            que más
                                            participantes dentro de la organización del cliente puedan jugar en la
                                            plataforma
                                            Transitions Run®. Aunque varios códigos se generan para el mismo cliente,
                                            los puntos
                                            obtenidos por todos los miembros de la organización sumarán para ranquear al
                                            cliente
                                            principal, pero el mejor colaborador o empleado que logre la mayor cantidad
                                            de
                                            puntos recibirá un premio extra. (Mejores: 6 códigos por mes) (Alto Stock: 4
                                            códigos
                                            por mes) (Frecuentes: 2 códigos por mes) (Inciertos: 1 código por mes). Los
                                            3
                                            primeros meses se entregarán premios de menor cuantía (relacionar los
                                            premios por
                                            país), estos premios se otorgarán a los 3 primeros clientes de cada país y a
                                            los 3
                                            primeros colaboradores o empleados que mejor puntaje obtengan dentro de los
                                            clientes
                                            mejor rankeados. El mes 4to, se entregarán los premios principales y
                                            generales por
                                            cada país (relacionar los premios por país), cada país tendrá un premio
                                            principal,
                                            un premio secundario para el laboratorio o la óptica y un premio final para
                                            el
                                            colaborador con mejor puntaje logrado durante este último mes. Los puntajes
                                            de los
                                            clientes (laboratorios y ópticas) serán acumulables durante los 4 meses de
                                            ejecución, esto con la finalidad de tener un Ranking general durante todos
                                            los
                                            meses. Los puntos de los colaboradores de cada cliente NO serán acumulables.
                                            Mes a
                                            mes se revisará el mejor puntaje del colaborador del cliente ganador para
                                            entregar
                                            el premio respectivo. Criterios de descalificación El Participante que no
                                            cumpla con
                                            alguno de los requisitos aquí establecidos en alguno de los meses en los
                                            cuales
                                            estará vigente la Actividad no obtendrá el premio establecido para los
                                            ganadores. El
                                            Participante que no esté previamente registrado en la base de datos
                                            establecida para
                                            la actividad. El Participante que utilice la plataforma con fines ilegales,
                                            o que
                                            incurra en delitos o cualquier tipo de actividad ilegal o ilícita para
                                            acceder a los
                                            premios. El Participante que incurra en acciones que afecten la reputación
                                            de
                                            Essilor o la marca Transitions® El Participante que utilice medios
                                            automatizados,
                                            diferentes a los normalmente utilizados y ya autorizados, para acceder al
                                            sitio de
                                            la Actividad con el fin de defraudar la misma, obtener ventaja sobre otros
                                            participantes o cualquier otro fin no legítimo. El Participante que rechace
                                            el
                                            premio. Selección y Comunicación a los Participantes Ganadores El
                                            Organizador
                                            verificará cada mes el cumplimiento por parte de los Participantes de los
                                            requisitos
                                            aquí establecidos. El Organizador notificará por cualquier medio idóneo al
                                            participante que haya ganado el premio conseguido durante el mes calendario
                                            correspondiente ya sea mes xxx xxx xxx Premios y condiciones para la
                                            redención del
                                            Premio Aquellos Participantes que cumplan con las condiciones establecidas
                                            en el
                                            numeral (4) del capítulo de MECÁNICA PARA PARTICIPAR EN LA ACTIVIDAD de los
                                            presentes T&C’s, podrán ganar los premios establecidos en dicho numeral (4)
                                            de
                                            acuerdo a su categoría. Ningún premio es transferible ni intercambiable ni
                                            acumulativo con otro tipo de actividades organizadas por Essilor. No se
                                            entregarán
                                            premios en dinero. En el evento que el Participante ganador rechace el
                                            premio, o no
                                            acepte las condiciones del mismo, será descalificado, no tendrá derecho al
                                            premio, y
                                            se entenderá que renuncia a cualquier reclamo de indemnización alguna total
                                            o
                                            parcial frente al Organizador. Tratamiento de datos personales Los
                                            Participantes al
                                            momento de diligenciar su registro a través de la Plataforma de Essilor
                                            Experts,
                                            autorizan de manera expresa, clara e inequívoca para que el Organizador
                                            proceda a
                                            tratar su datos personales con la finalidad de: (i) Contactar al
                                            Participante para
                                            comunicar la meta de venta y para hacer la redención del premio en caso de
                                            resultar
                                            ganador, (ii) llevar un registro de los Participantes inscritos a través de
                                            la
                                            plataforma Essilor Experts. Los Participantes aceptan que el Organizador
                                            tratará sus
                                            datos personales de conformidad con lo dispuesto en la Ley 1581 de 2012,
                                            Decreto No.
                                            1377 de 2013, Decreto No. 1074 de 2015 y demás normas complementarias, como
                                            también
                                            de conformidad con la Política de Tratamiento de Datos que el Organizador
                                            tiene
                                            disponible, la cual puede requerir en cualquier momento al Organizador.
                                            Igualmente,
                                            los Participantes autorizan al Organizador para transmitir y transferir los
                                            datos
                                            personales de los cuales los Participantes son titulares para cumplir con
                                            cualquiera
                                            de las finalidades aquí dispuestas. Los Participantes como titulares de los
                                            datos
                                            personales tienen derecho a solicitar en cualquier momento ante el
                                            Organizador la
                                            actualización de sus datos personales, prueba de la autorización para el
                                            tratamiento, revocar la autorización o solicitar la supresión de sus datos
                                            personales. Para el ejercicio de sus derechos, los Participantes titulares
                                            de los
                                            datos personales se pueden poner en contacto con el Organizador a través de
                                            cualquiera de los canales que éstas hayan informado para tal fin.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal mecanica-->
                <div class="modal fade" id="modalMecanica" tabindex="-1" aria-labelledby="modalMecanicaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title  text-white text-titulo-terminos" id="exampleModalLabel">MECANICA
                                </h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 video-container video" >
                                        <video src="video/video_transition.mp4" autoplay controls width="100%" height="auto">Tu navegador no soporta la etiqueta de video</video>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-white  text-terminos">Ya estás a punto de correr, inicia sesión o
                                            regístrate para retar tus habilidades.
                                            Recuerden todos nuestros clientes que deben realizar un primer ingreso, un
                                            fácil
                                            registro para poder tener todos los datos dentro del sistema del Transitions
                                            Run.
                                            Recuerda que después del primer ingreso generando el registro, podrás
                                            acceder las
                                            veces que quieras únicamente utilizando tu número de identificación
                                            personal. Si
                                            eres parte de nuestro grupo de clientes Experts, podrás ingresar por el
                                            siguiente
                                            campo directamente utilizando solo tu número de identificación personal,
                                            recuerda
                                            que podrás participar las veces que lo desees. Recuerda, en el siguiente
                                            link puedes
                                            ver los términos y condiciones para que tengas claro todo el reglamento que
                                            tiene tu
                                            participación. Aunque estamos en una carrera para participar por increíbles
                                            premios,
                                            Essilor Luxottica siempre desarrollará y apoyará las mejores iniciativas
                                            para
                                            mantener una buena visión que es la mejor condición para tener seguridad
                                            vial. Ya
                                            casi empieza la carrera, acá podrás identificar en un corto instructivo,
                                            tenlo en
                                            cuenta cada vez que juegues para conseguir más puntos: 1. Registrate o
                                            ingresa si ya
                                            estás registrado o eres Experts. 2. Recuerda que podrás manejar tu vehículo
                                            con las
                                            flechas de tu ordenador. 3. Logra recorrer la pista completa, durante el
                                            recorrido
                                            captura los iconos de monturas, cada icono que captures tendrá una pregunta
                                            que te
                                            dará más puntos. Recuerda que sumarás puntos por completar la pista,
                                            capturar
                                            monturas y responder correctamente las preguntas. Cada ingreso que realices
                                            al
                                            Transitions Run te dará 3 oportunidades de recorrer la pista. El mejor
                                            puntaje será
                                            el que se registre y guarde en el sistema hasta que logres un nuevo mejor
                                            puntaje.
                                            Al finalizar tu participación o los 3 recorridos, podrás ver tu puntaje
                                            mayor y
                                            algunos tips que solo Essilor Luxottica y Transitions tienen para ti.
                                            Adicionalmente
                                            encontrarás un link directo a nuestra plataforma LEONARDO, donde podrás
                                            encontrar el
                                            mejor contenido académico y de capacitación que solo Essilor Luxottica y
                                            todas sus
                                            marcas traen para ti y todos los colaboradores de tu óptica o laboratorio.
                                            El
                                            ingresar a la plataforma te dará puntos extras para tu ranking, y muchos
                                            puntos más
                                            si llegas a ingresar y registrate en alguno de los programas o
                                            capacitaciones de
                                            LEONARDO. Recuerda participar cuantas veces te sea posible y logra en cada
                                            oportunidad mejorar tu puntaje, tienes la posibilidad de ganar de manera
                                            individual,
                                            y si tus compañeros de óptica o laboratorios también juegan sin cansancio,
                                            podrán
                                            ganar premios grupales. Ahora solo falta que ingreses y comiences a ganar
                                            puntos,
                                            Transitions siempre piensa en ti y mejora cada día para dar la mejor
                                            tecnología y
                                            cuidados para tus pacientes. ¡Que empiece la carrera en el Transitions Run!
                                        </p>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col div-content justify-content-center align-items-center d-flex flex-column">
                <img src="images/logo.png" class="img-fluid  text-center img-lgo-instrucciones" alt="">
                <img src="images/form/inicio_sesion.png" class="img-fluid  text-center img-lgo-instruccioness" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 ">
                <form class="mt-3" action="operaciones/logicaLogin.php" method="POST">
                    <div class="row align-items-center">
                        <div class="col-12" style="margin: 3rem 0">
                            <input type="text" class="form-control id" name="documento">
                        </div>
                        <div class="col-12" style="margin: 1rem 0">
                            <div class="form-check p-0">
                                <label class="label-rombo">
                                    <input type="checkbox" class="checkbox-svg" required>
                                    <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" class="checkbox-svg-icon">
                                        <g id="Layer_1">
                                            <title>Layer 1</title>
                                            <path id="svg_2" d="m1.1552,11.09051l4.23429,-9.92l11.29143,0l4.23428,9.92l-4.23428,9.92l-11.29143,0l-4.23429,-9.92z" stroke-width="1" stroke="#FFFFFF" fill="none" />
                                            <path id="svg_3" d="m7.37679,10.95527l0,0c0,-2.20914 1.62968,-4 3.64,-4l0,0c0.96539,0 1.89124,0.42143 2.57387,1.17157c0.68263,0.75015 1.06613,1.76756 1.06613,2.82843l0,0c0,2.20914 -1.62968,4 -3.64,4l0,0c-2.01032,0 -3.64,-1.79086 -3.64,-4zm3.64,-4l0,8m-3.64,-4l7.28,0" stroke-width="2" stroke="#ffffff" fill="#ffffff" class="checkbox-svg-icon-check" />

                                        </g>
                                    </svg>
                                    <p class="form-check-label text-white p-0 m-0"> *He leído, acepto y autorizo el uso y
                                        tratamiento de mis datos personales de
                                        conformidad con la <span style="text-decoration: underline;">Política de
                                            Tratamiento de Datos, Términos y condiciones</span> del
                                        Grupo ESSILOR Latinoameria.</p>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn">
                                <img src="images/form/btn_ingresar.png" class="img-fluid" alt="img">
                            </button>
                            <a class="link-navigation text-white d-block text-center mb-3" href="formularioActualizarnormal.php" style="text-decoration: underline;">¿Deseas actualizar tus datos?</a>
                            <a class="link-navigation text-white d-block text-center my-3" href="registro.php" style="text-decoration: underline;">Si no estás registrado, ingresa aca</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($mensaje_dos)) {
    ?>
    <!-- MODAL DE USUARIO INACTIVO - QUEDA -->
        <div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true" style="    background: rgba(0,0,0, .7);">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="background: none !important;">
                    <div class="modal-body " style="overflow-y: auto;">
                        <div class=" d-flex justify-content-center align-items-center">
                            <div class="cont-img ">
                                <img src="images/form/form_inactivo.png" alt="" class="img-inactivo">
                                <button type="button" id="cerrarModal">
                                    <img src="images/form/close.png" alt="" class="close-inactivo">
                                </button>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    <?php
    } elseif (isset($mensaje_uno)) {
    ?>
    <!-- MODAL DE USUARIO NO EXISTE FALTA CORREGIR -> el texto deberia de decir usted no tiene ninguna cuenta registrada -->
        <div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true" style="    background: rgba(0,0,0, .7);">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="background: none !important;">
                    <div class="modal-body " style="overflow-y: clip; padding:2rem;">
                        <div class=" d-flex justify-content-center align-items-center">
                            <div class="cont-certificado">
                                <img src="images/certificado_generado/no_registrado.png" alt="" class="generado">
                                <a href="registro.php">
                                    <img src="images/certificado_generado/btn_continuar_2.png" alt="" class="continuar-generado">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <footer class="footer mb-3 pl-3" style="position: absolute;"> 
        <div class="row m-0 p-0">
            <div class="col">
                <p class="m-0 text-footer">Copyright ©️ 2022 Essilor Latinoamérica - Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/modal.js"></script>
    <script>

    </script>
</body>

</html>