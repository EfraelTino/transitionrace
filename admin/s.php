<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sistema Academico</title>

  <!-- Bootstrap -->
  <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="Gentella/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-color: #2C0341 !important;">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><img src="../images/logo.png" alt="logo"  style="width: 50vw;"></a>
    </div>
    <div class="card" style="background-color:  #540562 !important; border-radius:3%;">
      <div class="card-body login-card-body" style="background-color: #540562 !important; border-radius:50%;">
        <p class="login-box-msg text-white">Inicia sesión con una cuenta</p>
        <form action="include/login.php" method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Usuario" name="usuario" style="border: none; background-color: #380447;">
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" style="border:none;background: #380447;">
          </div>
          <div class="row">
            <div class="col-6">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember" class="text-white">
                  Recordar
                </label>
              </div>
            </div>
            <div class="col-6">
              <button type="submit" class="btn btn-block text-white" style="background-color: #2C0341;">Iniciar
                Sesión</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="plugins/jquery/jquery.min.js"></script>

  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/chart.js/Chart.min.js"></script>
  <script src="plugins/sparklines/sparkline.js"></script>
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="dist/js/adminlte.js"></script>
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>