<?php
include "include/conexion.php";
include "include/busquedas.php";
include "include/verificar_sesion.php";

$d_insti = $_GET['id'];
$busc_datos = buscarDInstitiByCodigo($conexion, $d_insti);
$res_b_insti = mysqli_fetch_array($busc_datos);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar datos institucionales | </title>
    <!-- Bootstrap -->
    <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Gentella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="Gentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Gentella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php include "include/menu.php" ?>
            <!-- Menu en la parte superior -->
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Editar Datos Insitutcionales</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form class="form-horizontal form-label-left" method="POST" action="operaciones/actualizar_datos_institucionales.php">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código modular :
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" name="codigo" class="form-control col-md-7 col-xs-12" value="<?php echo $d_insti?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">RUC :
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" name="ruc" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_insti['ruc']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre de la institución :
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="nombre_institucion" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_insti['nombre_institucion']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Departamento :</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="departamento" id="departamento" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_insti['departamento']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Provincia :
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="provincia" class="date-picker form-control col-md-7 col-xs-12"  value="<?php echo $res_b_insti['provincia']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Distrito :
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="distrito"class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_insti['distrito']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dirección :
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="direccion" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_insti['direccion']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Teléfono :
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" name="telofono" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_insti['telofono']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Correo :
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="correo" id="correo"class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_insti['correo']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Número de la resolución:
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="nro_resolucion" id="nro_resolucion" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_insti['nro_resolucion']; ?>">
                                        </div>
                                    </div>                            
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a type="button" class="btn btn-primary"  href="./datos_institucionales.php"> Cancelar </a>
                                            <button type="submit" class="btn btn-success">Guardar</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <!-- jQuery -->
    <script src="Gentella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="Gentella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="Gentella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="Gentella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="Gentella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="Gentella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="Gentella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="Gentella/vendors/Flot/jquery.flot.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="Gentella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="Gentella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="Gentella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="Gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="Gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="Gentella/vendors/moment/min/moment.min.js"></script>
    <script src="Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="Gentella/build/js/custom.min.js"></script>
</body>

</html>