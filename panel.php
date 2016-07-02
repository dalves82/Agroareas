<?php
include("verif.php");
require_once 'classes/Agroareas.class.php';
$aa = new Agroareas();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgroAreas - App</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="plugins/animo.js/animate-animo.min.css">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- Summernote-->
    <link rel="stylesheet" type="text/css" href="plugins/summernote/dist/summernote.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="build/css/umega.css">
    <!-- Skins-->
    <link rel="stylesheet" type="text/css" href="build/css/skins.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Main Sidebar start-->
    <aside class="main-sidebar pinned">
      <div class="brand"><a href="index.html" class="logo"><!--<i class="ti-underline"></i>-->
          <h2>Agroareas<span>app</span></h2></a><a href="javascript:;" role="button" class="sidebar-toggle visible-xs-block"><i class="ti-close text-white"></i></a></div>
      <div class="profile">
        <div id="esp-profile" data-percent="65" style="height: 130px; width: 130px; line-height: 100px; padding: 15px;" class="easy-pie-chart"><img src="build/images/users/00.jpg" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
        <h5 class="text-white mt-15 mb-5"><?php echo $_SESSION['UsNombre']." ".$_SESSION['UsApellido'] ?></h5>
        <div class="text-muted">Usuario</div>
      </div>
      <!-- Nav tabs-->
      <ul role="tablist" class="nav nav-tabs nav-justified nav-sidebar">
        <li role="presentation" class="active"><a href="#menu" aria-controls="menu" role="tab" data-toggle="tab"><i class="ti-menu"></i></a></li>
        <!--<li role="presentation"><a href="#portfolio" aria-controls="portfolio" role="tab" data-toggle="tab"><i class="ti-user"></i></a></li>
        <li role="presentation" class="bubble"><a href="#email" aria-controls="email" role="tab" data-toggle="tab"><i class="ti-email"><span class="dot bg-danger"></span></i></a></li>
        <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab"><i class="ti-server"></i></a></li>-->
      </ul>
      <!-- Tab panes-->
      <div class="tab-content nav-sidebar-content">
        <div id="menu" role="tabpanel" class="tab-pane fade in active">
          <ul class="list-unstyled navigation mb-0">
            <li class="header">Menú principal</li>
            <li><a href="index.html" class="bubble"><i class="ti-home"></i> Principal<!--<span class="badge bg-danger">3</span>--></a></li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse13" aria-expanded="false" aria-controls="collapse13" class="collapsed"><i class="ti-location-pin"></i>Campos</a>
              <ul id="collapse13" class="list-unstyled collapse">
                <li><a href="mapa.php">Mis potreros</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <!-- Main Sidebar end-->
    <!-- Header start-->
    <header>
      <div class="brand pull-left"><a href="index.html" class="logo"><!--<i class="ti-underline"></i>-->
          <h2>Agroareas<span>app</span></h2></a></div><a href="javascript:;" role="button" class="sidebar-toggle pull-left header-icon"><i class="ti-menu text-muted"></i></a>
      <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search text-muted"></i></a></li>
        <li class="visible-lg"><a href="javascript:;" role="button" class="header-icon fullscreen-toggle"><i class="ti-fullscreen text-muted"></i></a></li>
        <li><a href="login.html" role="button" class="header-icon"><i class="ti-power-off text-muted"></i></a></li>
      </ul>
    </header>
    <!-- Header end-->
    <!-- Work Here start-->
    <section class="page-container">
        <div class="page-header clearfix">
            <div class="pull-left">
              <h4 class="mt-0 mb-5">Bienvenido</h4>
              <ol class="breadcrumb mb-0">
                <li><a href="#"><?php echo $_SESSION['UsNombre']." ".$_SESSION['UsApellido'] ?></a></li>
                <!--<li><a href="#">Extra Pages</a></li>
                <li class="active">Blank Template</li>-->
              </ol>
            </div>
        </div>
        <div class="page-content container-fluid">
            <h3 class="mt-0">Información de tu perfil</h3>
            <div class="row">
                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-body">
                        <p class="lead">Tu perfil está completo en un 75%, por favor valida tu email y completa el resto de tus datos.</p>
                        <div id="esp-2" data-percent="75" style="height: 140px; width: 140px; line-height: 120px; padding: 10px;" class="easy-pie-chart">
                            <div style="top: 45px; left: 45px" class="percent"></div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="widget">
                        <div class="widget-heading">
                            <h3 class="widget-title">Completa tus datos</h3>
                        </div>
                        <div class="widget-body">
                            <p class="lead"><?php echo $_SESSION['UsNombre']." ".$_SESSION['UsApellido']." (".$_SESSION['UsEmail'].")" ?></p>
                            <form class="form-horizontal" action="accionPost.php" method="post">
                            <input type="hidden" name="acc" value="actualizar">
                            <input type="hidden" name="obj" value="usuario">
                            <input type="hidden" name="email" value="<?php echo $_SESSION['UsEmail'] ?>">
                            <div class="form-group">
                                <label for="textInputHor" class="col-sm-3 control-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input name="usnom" id="textInputHor" type="text" class="form-control" value="<?php echo $_SESSION['UsNombre'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textInputHor" class="col-sm-3 control-label">Apellido</label>
                                <div class="col-sm-9">
                                    <input name="usape" id="textInputHor" type="text" class="form-control" value="<?php echo $_SESSION['UsApellido'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="selectBasicHor" class="col-sm-3 control-label">Ciudad</label>
                                <div class="col-sm-9">
                                    <select id="selectBasicHor" class="form-control" required="">
                                        <option value="" disabled selected>Selecciona una ciudad</option>
                                        <?php
                                        foreach ($aa->obtenerCiudades() as $ciudad){
                                        ?>
                                        <option value="<?php echo $ciudad['CiuId'] ?>"><?php echo $ciudad['CiuNom'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textInputHor" class="col-sm-3 control-label">Dirección</label>
                                <div class="col-sm-9">
                                    <input name="usdir" id="textInputHor" type="text" class="form-control" value="<?php //echo $_SESSION['UsApellido'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textInputHor" class="col-sm-3 control-label">Teléfono 1</label>
                                <div class="col-sm-9">
                                    <input name="ustel1" id="textInputHor" type="text" class="form-control" value="<?php //echo $_SESSION['UsApellido'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textInputHor" class="col-sm-3 control-label">Teléfono 2</label>
                                <div class="col-sm-9">
                                    <input name="ustel2" id="textInputHor" type="text" class="form-control" value="<?php //echo $_SESSION['UsApellido'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="radio-custom">
                                        <input id="optionsRadios1Hor" type="radio" name="ussexo" value="F">
                                        <label for="optionsRadios1Hor">Femenino</label>
                                    </div>
                                    <div class="radio-custom">
                                        <input id="optionsRadios2Hor" type="radio" name="ussexo" value="M">
                                        <label for="optionsRadios2Hor">Masculino</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-outline btn-success">Actualizar</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- jQuery-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- jQuery Cookie-->
    <script type="text/javascript" src="plugins/jquery.cookie/jquery.cookie.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jQuery Advanced News Ticker-->
    <script type="text/javascript" src="plugins/jquery-advanced-news-ticker/js/newsTicker.js"></script>
    <!-- Malihu Scrollbar-->
    <script type="text/javascript" src="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Animo.js-->
    <script type="text/javascript" src="plugins/animo.js/animo.min.js"></script>
    <!-- Bootstrap Progressbar-->
    <script type="text/javascript" src="plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- jQuery Easy Pie Chart-->
    <script type="text/javascript" src="plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- Sparkline-->
    <script type="text/javascript" src="plugins/kapusta-jquery.sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Summernote-->
    <script type="text/javascript" src="plugins/summernote/dist/summernote.min.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="build/js/app.js"></script>
    <script type="text/javascript" src="build/js/demo.js"></script>
    <script type="text/javascript" src="build/js/pages/other-charts.js"></script>
  </body>
</html>