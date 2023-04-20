<?php
include "include/conexion.php";
include "include/verificar_sesion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gentelella Alela! | </title>
  <!-- Bootstrap -->
  <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="Gentella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="Gentella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="Gentella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="Gentella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="Gentella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="Gentella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container" style="background-color: #2C0341 !important;">
      <?php include "include/menu.php" ?>
      <!-- Menu en la parte superior -->
      <!-- page content -->
      <div class="right_col" role="main" style="background-color: #593662 !important;">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel" style="background-color: #371441 !important; border: none;">
              <div class="x_title" style="border-color:#2C0341 !important">
                <h2 style="color:#fff !important;">Usuarios registrados</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table id="example" class="table table-striped table-bordered">
                  <style>
                    thead{
                      background-color: #2C0341 !important;
                      color:#fff !important;
                    }
                    tbody, td{
                      background-color: #371441 !important;
                      color: #fff !important;
                    }
                    .dataTables_length label, .dataTables_filter label{
                      color: #fff !important;
                    }
                    .dataTables_length label select{
                      background-color: #2C0341 !important;
                      color: #fff !important;
                    }
                    .dataTables_filter label input{
                      background-color: #2C0341 !important;
                    }
                    .dataTables_info{
                      color: #fff !important;
                    }
                    #example_previous a , #example_next a{
                      background: #593662 !important;
                      color: #fff !important;
                      border-color: #2C0341 !important;
                    }
                    .paginate_button  a{
                      color: #fff;
                      border: 0px;
                      border-color: #2C0341 !important;
                      background-color: #2C0341 !important;

                    }


                  </style>
                  <thead>
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

                  <tbody>
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
                    <?php
                    }

                    ?>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
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
  <!-- iCheck -->
  <script src="Gentella/vendors/iCheck/icheck.min.js"></script>
  <!-- Datatables -->
  <script src="Gentella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="Gentella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="Gentella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="Gentella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="Gentella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="Gentella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="Gentella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="Gentella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="Gentella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="Gentella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="Gentella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="Gentella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="Gentella/vendors/jszip/dist/jszip.min.js"></script>
  <script src="Gentella/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="Gentella/vendors/pdfmake/build/vfs_fonts.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="Gentella/build/js/custom.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
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
      });

    });
  </script>
</body>

</html>