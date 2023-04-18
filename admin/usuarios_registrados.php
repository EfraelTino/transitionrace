<?php
include "../logica/conexion.php";
include "operaciones/verificar_sesion.php";

?>
<!DOCTYPE html>
<html lang="en">
<style>
    div.dataTables_wrapper .row .col-sm-12 {
        overflow: auto !important;
    }

    div.dataTables_wrapper .row .col-sm-12::-webkit-scrollbar-thumb:hover {
        background: #2C0341 !important;
        box-shadow: 0 0 2px 1px rgb(89, 54, 98) !important;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TransitionRace | Dashboard
    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<style>
    .dark-mode .page-item:not(.active) .page-link {
        background-color: rgb(89, 54, 98) !important;
        border-color: #fff !important;
        color: #fff;
    }

    .page-item.active .page-link {
        background-color: #2C0341 !important;
        border-color: #fff !important;

    }
</style>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="background-color:  #503158 !important;">

    <?php
    include "nav.php";
    include "menu.php";
    ?>
    <div class="content-wrapper" style="background-color: #593662 !important;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Relación de usuarios</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card" style="background-color: #371441 !important;">
                    <div class="card-header" style="border-bottom: 1px solid #2C0341;">
                        <h3 class="card-title">Todos los usuarios</h3>
                    </div>
                    <div class="card-body">
                        <div>
                            <table id="example" class="table table-bordered table-striped" style="    border: 1px solid #fff;">
                                <thead style="background-color: #2C0341 !important;">
                                    <tr>
                                        <th class="text-center">Nª</th>
                                        <th class="text-center">Llave global</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Nombre optica</th>
                                        <th class="text-center">Pais</th>
                                        <th class="text-center">Nombre usuario</th>
                                        <th class="text-center">Documento</th>
                                        <th class="text-center">Email Usuario</th>
                                        <th class="text-center">Teléfono</th>
                                        <th class="text-center">Recepcionista</th>
                                        <th class="text-center">Estado </th>
                                        <th class="text-center">IP</th>
                                        <th class="text-center">Fecha Inicio</th>
                                        <th class="text-center">Fecha Último</th>
                                        <th class="text-center">Puntuación Alta</th>
                                        <th class="text-center">Preguntas Acertadas</th>
                                        <th class="text-center">Certificado 1</th>
                                        <th class="text-center">Certificado 2</th>
                                        <th class="text-center">Certificado 3</th>
                                        <th class="text-center">Certificado 4</th>
                                        <th class="text-center">Certificado 5</th>
                                        <th class="text-center">Tipo de Jugador</th>
                                        <th class="text-center">Veces Jugados</th>
                                        <th class="text-center">Nivel de Jugador</th>
                                        <th class="text-center">Acciones</th>

                                    </tr>
                                </thead>
                                <?php
                                $consulta = "select DISTINCT id,documento,llabeglobal,email,nombrecliente,pais, registroapp,noregistrado,pointz, nombreusaurio,emailusuario,telefono,antencion,estado,ip,fechai,fechau,puntuacion,preguntas,dato1,dato2,dato3,dato4,dato5,tipo,pluss,veces, nivel from clientestra WHERE documento != '' ORDER BY puntuacion DESC";
                                $resultado = $dblink->query($consulta);
                                $pos = 0;
                                while ($row = $resultado->fetch_assoc()) {
                                    $pos++;
                                ?>
                                    <tr>
                                        <td><?php echo $pos; ?></td>

                                        <td class="text-center"><?php echo $row['llabeglobal']; ?></td>
                                        <td class="text-center"><?php echo $row['email']; ?></td>
                                        <td class="text-center"><?php echo $row['nombrecliente']; ?></td>
                                        <td class="text-center"><?php echo $row['pais']; ?></td>
                                        <td class="text-center"><?php echo $row['nombreusaurio']; ?></td>
                                        <td class="text-center"><?php echo $row['documento']; ?></td>
                                        <td class="text-center"><?php echo $row['emailusuario']; ?></td>
                                        <td class="text-center"><?php echo $row['telefono']; ?></td>
                                        <td class="text-center"><?php echo $row['antencion']; ?></td>
                                        <td class="text-center"><?php echo $row['estado'] == 1   ? 'Activo' : 'Desactivo'; ?></td>
                                        <td class="text-center"><?php echo $row['ip']; ?></td>
                                        <td class="text-center"><?php echo $row['fechai']; ?></td>
                                        <td class="text-center"><?php echo $row['fechau']; ?></td>
                                        <td class="text-center"><?php echo $row['puntuacion']; ?></td>
                                        <td class="text-center"><?php echo $row['preguntas']; ?></td>
                                        <td class="text-center"><?php echo $row['dato1']; ?></td>
                                        <td class="text-center"><?php echo $row['dato2']; ?></td>
                                        <td class="text-center"><?php echo $row['dato3']; ?></td>
                                        <td class="text-center"><?php echo $row['dato4']; ?></td>
                                        <td class="text-center"><?php echo $row['dato5']; ?></td>
                                        <td class="text-center"><?php echo $row['tipo'] == 1 ? 'Expert' : 'Normal'; ?></td>
                                        <td class="text-center"><?php echo $row['veces']; ?></td>
                                        <td class="text-center"><?php echo $row['nivel']; ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary editar-btn" data-toggle="modal" data-target="#editarDatos<?php echo $row['id']; ?>"><i class="fa fa-edit"> </i></button>
                                        </td>

                                    </tr>
                                    
                                    <?php include "modalEditar.php"; ?>
                                <?php
                                }

                                ?>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            // "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "language": {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
            }
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": true,
            "Search": "Buscar",
            "ordering": true,
            "autoWidth": false,
            "responsive": true,
        });;

    });
    // $(function() {
    //     $("#example1").DataTable({
    //         "responsive": true,
    //         "lengthChange": false,
    //         "autoWidth": false,
    //     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    //     $('#example2').DataTable({
    //         "paging": false,
    //         "lengthChange": false,
    //         "searching": true,
    //         "Search" : "Buscar",
    //         "ordering": true,
    //         "autoWidth": false,
    //         "responsive": true,
    //     });
    // });
</script>
<script src="dist/js/adminlte.js"></script>

</body>

</html>