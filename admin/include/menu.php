<div class="col-md-3 left_col" style="background-color: #2C0341 !important;">
  <div class="left_col scroll-view" style="background-color: #2C0341 !important;">
    <div class="navbar nav_title" style="border: 0; background-color: #2C0341 !important;">
      <a href="#" class="brand-link">
        <img src="../images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="70vw">
        <span class="brand-text font-weight-bold text-white">TranitionsRace</span>
      </a>
    </div>

    <div class="clearfix"></div>
    <div class="profile clearfix" style="display: flex; align-items: center;">
      <div class="profile_pic" style="display: flex; align-items: center;">
        <img src="../images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="70vw">
      </div>
      <div class="profile_info" style="padding: 0 !important;">
        <span>Bienvenido</span>
        <h2><?php $user =$_SESSION['username']; echo $user ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="~#"><i class="fa fa-home"></i> Inicio </a>



          </li>
          <li><a href="usuarios_registrado.php">Usuarios registrados</a></li>
              <!-- <li><a href="periodo_academico.php">Ganador por países</a></li> -->
              <li><a href="ganador_global.php">Ganador global</a></li>
              <!-- <li><a href="programa_estudios.php">Programa de Estudios</a></li> -->
              <li><a href="modulo_formativo.php">Ver PDF</a></li>
              <li><a href="semestre.php">Descargar en excel</a></li>
          </li>
          <li><a><i class="fa fa-desktop"></i> Programación Académica <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <!-- <li><a href="prog_ud.php">Programación de Unidades Didacticas</a></li>
              <li><a href="matricula.php"> Matrícula</a></li>
              <li><a href="calificacion.php"> Calificaciones</a></li>
              <li><a href="condicion.php"> Condición</a></li> -->
            </ul>
          </li>
          <!-- <li><a><i class="fa fa-desktop"></i> Docentes <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="docentes.php">Docente</a></li>
              <li><a href="usuarios_docentes.php">Usuarios Docentes</a></li>
            </ul>
          </li> -->
          <!-- <li><a><i class="fa fa-book"></i> Estudiantes <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">

              <li><a href="estudiantes.php">Estudiante</a></li>
              <li><a href="usuarios_estudiantes.php">Usuarios Estudiante</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
  </div>
</div>
<!-- top navigation -->
<style>
  .current-page{
    border-right: 5px solid #fff !important;
  }
</style>
<div class="top_nav" >
  <div class="nav_menu" style="background-color: #2C0341 !important; color:#fff; border-bottom: 0px;">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle" style="color:#fff !important"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <style>
            .sd:hover{
              color: #fff !important;
              background: none !important;
            }
            .sd:focus{
              background: none !important;
            }
          </style>
          <a href="javascript:;" class="user-profile dropdown-toggle sd" data-toggle="dropdown" aria-expanded="false" style="color:#fff !important" >
            <!-- <img src="./img/logo.png" alt=""><?php echo $res_b_d_s['apellidos_nombres']; ?> -->
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right" style="background-color: #2C0341 !important; color: #fff;">
            <li><a href="operaciones/cerrar_sesion.php" class="sd" style="color: #fff !important;"> <i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->