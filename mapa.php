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
    <link href="aa/css/agroareas.mapas.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=geometry&sensor=false"></script>
    <script type="text/javascript" src="aa/js/agroareas.mapas.js"></script>
    <script language="JavaScript1.2">
        /*
        window.moveTo(0, 0);
        if (document.all) {
            top.window.resizeTo(screen.availWidth, screen.availHeight);
        } else if (document.layers || document.getElementById) {
            if (top.window.outerHeight < screen.availHeight || top.window.outerWidth < screen.availWidth) {
                top.window.outerHeight = screen.availHeight;
                top.window.outerWidth = screen.availWidth;
            }
        }*/
    </script>
  </head>
  <body onLoad="iniciarMapa()">
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
      <!--<div class="search-bar closed">
        <form>
          <div class="input-group input-group-lg">
              <input type="text" placeholder="Search for..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ti-close"></i></button></span>
          </div>
        </form>
      </div>-->
      <div class="brand pull-left"><a href="index.html" class="logo"><!--<i class="ti-underline"></i>-->
          <h2>Agroareas<span>app</span></h2></a></div><a href="javascript:;" role="button" class="sidebar-toggle pull-left header-icon"><i class="ti-menu text-muted"></i></a>
      <!--
      BUSCADOR
      <form class="mt-15 mb-15 pull-left hidden-xs">
        <div class="form-group has-feedback mb-0">
          <input type="text" aria-describedby="inputSearchFor" placeholder="Search for..." style="width: 200px" class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputSearchFor" class="sr-only">(default)</span>
        </div>
      </form>-->
      <!--
      NOTIFICACIONES
      <ul class="newsticker list-unstyled ml-15 mb-0 pull-left visible-lg">
        <li class="fw-500">You <span class="text-danger">recommended</span> Karen Ortega.</li>
        <li class="fw-500">You <span class="text-info">followed</span> Olivia Williamson.</li>
        <li class="fw-500">New product <span class="text-success">Microsoft Lumia 950XL</span></li>
        <li class="fw-500">New order <span class="text-success">#021930217965</span></li>
      </ul> -->
      <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search text-muted"></i></a></li>
        <li class="visible-lg"><a href="javascript:;" role="button" class="header-icon fullscreen-toggle"><i class="ti-fullscreen text-muted"></i></a></li>
        <!--
        NOTIFICACIONES DISQUETTE
        <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-save text-muted"></i><span class="badge bg-danger">3</span></a>
          <div aria-labelledby="dropdownMenu1" class="dropdown-menu dropdown-menu-right dm-medium fs-12 animated fadeInDown">
            <h5 class="dropdown-header">You have 3 file downloads</h5>
            <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
              <li class="media"><a href="javascript:;">
                  <div class="media-left"><i class="ti-music-alt media-object mo-sm img-circle bg-info text-center"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading">Music.mp3</h6>
                    <div class="progress progress-xs mb-5">
                      <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-info"><span class="sr-only">60% Complete</span></div>
                    </div>
                    <p class="text-muted mb-0">1.3 of 4MB - 685KB/sec - 4 sec</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left"><i class="ti-video-clapper media-object mo-sm img-circle bg-danger text-center"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading">Video.mp4</h6>
                    <div class="progress progress-xs mb-5">
                      <div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" class="progress-bar progress-bar-success"><span class="sr-only">100% Complete</span></div>
                    </div>
                    <p class="text-muted mb-0">Completed - 5 minutes ago</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left"><i class="ti-zip media-object mo-sm img-circle bg-warning text-center"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading">Copy.zip</h6>
                    <div class="progress progress-xs mb-5">
                      <div role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;" class="progress-bar"><span class="sr-only">45% Complete</span></div>
                    </div>
                    <p class="text-muted mb-0">650 of 1451MB - 721KB/sec - 20 min</p>
                  </div></a></li>
            </ul>
            <div class="dropdown-footer text-center p-10"><a href="javascript:;" class="fw-500 text-muted">See all file downloads</a></div>
          </div>
        </li> -->
        <!--
        NOTIFICACIONES MUNDO
        <li class="dropdown"><a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-world text-muted"></i><span class="badge bg-danger">6</span></a>
          <div aria-labelledby="dropdownMenu2" class="dropdown-menu dropdown-menu-right dm-medium fs-12 animated fadeInDown">
            <h5 class="dropdown-header">You have 6 notifications</h5>
            <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/17.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">William Carlson</h6>
                    <p class="text-muted mb-0">Commented on your post</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">5 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Barbara Ortega</h6>
                    <p class="text-muted mb-0">Sent you a new email</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">8 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Mark Barnett</h6>
                    <p class="text-muted mb-0">Sent you a new message</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11">9 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Alexander Gilbert</h6>
                    <p class="text-muted mb-0">Sent you a new email</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">15 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/12.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Amanda Collins</h6>
                    <p class="text-muted mb-0">You have 8 unread messages</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:35:35+07:00" class="fs-11">22 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/13.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Christian Lane</h6>
                    <p class="text-muted mb-0">Commented on your post</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">30 mins</time>
                  </div></a></li>
            </ul>
            <div class="dropdown-footer text-center p-10"><a href="javascript:;" class="fw-500 text-muted">See all notifications</a></div>
          </div>
        </li>-->
        <!--
        CHAT
        <li><a href="javascript:;" role="button" class="right-sidebar-toggle bubble header-icon"><i class="ti-comment-alt text-muted"></i><span class="dot bg-danger"></span></a></li>-->
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
            <!--
            <div class="pull-right">
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-outline"><img src="build/images/flags/us.jpg" alt="" class="flag-icon">English</button>
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                <ul class="dropdown-menu dropdown-menu-right animated fadeInDown">
                  <li><a href="#"><img src="build/images/flags/de.jpg" class="flag-icon">German</a></li>
                  <li><a href="#"><img src="build/images/flags/fr.jpg" class="flag-icon">French</a></li>
                  <li><a href="#"><img src="build/images/flags/es.jpg" class="flag-icon">Spanish</a></li>
                  <li><a href="#"><img src="build/images/flags/it.jpg" class="flag-icon">Italian</a></li>
                  <li><a href="#"><img src="build/images/flags/jp.jpg" class="flag-icon">Japanese</a></li>
                </ul>
              </div>
            </div> -->
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-lg-12">
                  <div class="widget">
                    <div class="widget-heading">
                      <h3 class="widget-title">Mis potreros</h3>
                    </div>
                    <div class="widget-body">
                      <!--<div id="simpleMap"></div>-->
                      <div id="map-canvas" style="height: 400px;"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Here end-->
    <!-- Right Sidebar start-->
    <!--
    <aside class="right-sidebar closed">
      <h5 class="text-center m-0 p-20 fs-16">Chat List<a href="javascript:;" role="button" class="right-sidebar-toggle pull-right fs-14"><i class="ti-close text-muted"></i></a></h5>
      <form class="mb-10 pl-20 pr-20">
        <div class="form-group has-feedback mb-0">
          <input type="text" aria-describedby="inputChatSearch" placeholder="Chat with..." class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputChatSearch" class="sr-only">(default)</span>
        </div>
      </form>
      <ul data-mcs-theme="minimal-dark" class="chat-list mb-0 fs-12 media-list mCustomScrollbar">
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Jane Curtis</h6>
              <p class="text-muted mb-0">Where are you from?</p>
            </div>
            <div class="media-right"><span class="badge bg-danger">2</span></div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Edward Garcia</h6>
              <p class="text-muted mb-0">Nice to meet you.</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Bruce Olson</h6>
              <p class="text-muted mb-0">What do you want to do?</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Martha Rodriguez</h6>
              <p class="text-muted mb-0">I'm hungry.</p>
            </div>
            <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Hannah Williamson</h6>
              <p class="text-muted mb-0">Do you know the address?</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Anthony Mills</h6>
              <p class="text-muted mb-0">No problem.</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Ethan Stanley</h6>
              <p class="text-muted mb-0">Hello?</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/08.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Jonathan Castro</h6>
              <p class="text-muted mb-0">OK. Thanks.</p>
            </div>
            <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/09.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Denise Rose</h6>
              <p class="text-muted mb-0">Bye bye.</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Eugene Meyer</h6>
              <p class="text-muted mb-0">How are you?</p>
            </div></a></li>
      </ul>
    </aside>
    
    <aside class="conversation closed">
      <h5 class="text-center m-0 p-20">Edward Garcia<a href="javascript:;" class="conversation-toggle pull-left"><i class="ti-arrow-left text-muted"></i></a><a href="javascript:;" class="pull-right"><i class="ti-pencil text-muted"></i></a></h5>
      <ul data-mcs-theme="minimal-dark" class="media-list chat-content fs-12 pl-20 pr-20 mCustomScrollbar">
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>Hello.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:45 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>Hi.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:46 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>How are you?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:47 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>I'm good. How are you?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:50 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>Good. Do you speak English?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:55 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>A little. Are you American?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:56 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>Yes.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:00 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>Where are you from?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:01 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>I'm from California.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:03 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>Nice to meet you.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:04 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>Nice to meet you too.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:05 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
      </ul>
      <form class="pl-20 pr-20">
        <div class="form-group has-feedback mb-0">
          <input type="text" aria-describedby="inputSendMessage" placeholder="Sent a message" class="form-control rounded"><span aria-hidden="true" class="ti-pencil-alt form-control-feedback"></span><span id="inputSendMessage" class="sr-only">(default)</span>
        </div>
      </form>
    </aside>
    -->
    <!-- Right Sidebar end-->
    
    <!-- Demo Settings start-->
    <!--
    <div class="setting closed"><a href="javascript:;" class="setting-toggle fs-16"><i class="ti-settings text-muted"></i></a>
      <h4 class="fs-16 mt-0 mb-15">Ajustes del entorno</h4>
      <form class="form-horizontal">
        <div class="clearfix">
          <h6 class="pull-left fs-13 fw-400">Fijar cabezal</h6>
          <div class="switch pull-right">
            <input id="fixed-header" type="checkbox">
            <label for="fixed-header" class="switch-success"></label>
          </div>
        </div>
        <div class="clearfix">
          <h6 class="pull-left fs-13 fw-400">Fijar barra lateral</h6>
          <div class="switch pull-right">
            <input id="fixed-sidebar" type="checkbox">
            <label for="fixed-sidebar" class="switch-success"></label>
          </div>
        </div>
        <div class="clearfix hidden-xs">
          <h6 class="pull-left fs-13 fw-400">Mostrar barra lateral</h6>
          <div class="switch pull-right">
            <input id="pinned-sidebar" type="checkbox">
            <label for="pinned-sidebar" class="switch-success"></label>
          </div>
        </div>
        <div class="clearfix hidden-xs">
          <h6 class="pull-left fs-13 fw-400">Ocultar barra lateral</h6>
          <div class="switch pull-right">
            <input id="closed-sidebar" type="checkbox">
            <label for="closed-sidebar" class="switch-success"></label>
          </div>
        </div>
        <div class="clearfix">
          <h6 class="pull-left fs-13 fw-400">Native Scrollbar</h6>
          <div class="switch pull-right">
            <input id="native-scrollbar" type="checkbox">
            <label for="native-scrollbar" class="switch-success"></label>
          </div>
        </div>
      </form>
    </div>
    -->
    <!-- Demo Settings end-->
    <!--
    <div tabindex="-1" role="dialog" aria-labelledby="composeMail" class="modal fade compose-mail-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-black">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            <h4 id="composeMail" class="modal-title">Compose Message</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input id="exampleInputEmail" type="text" placeholder="To" class="form-control">
              </div>
              <div class="form-group">
                <input id="exampleInputSubject" type="text" placeholder="Subject" class="form-control">
              </div>
              <textarea id="compose-mail"></textarea>
              <div class="text-right">
                <button type="button" data-dismiss="modal" class="btn btn-raised btn-default">Close</button>
                <button type="button" class="btn btn-raised btn-black">Send Mail</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    -->
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
    <!-- Google maps-->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=weather"></script>-->
    <!-- Custom JS-->
    <script type="text/javascript" src="build/js/app.js"></script>
    <script type="text/javascript" src="build/js/demo.js"></script>
    <script type="text/javascript" src="build/js/pages/other-charts.js"></script>
    <script type="text/javascript" src="build/js/pages/google-maps.js"></script>
  </body>
</html>