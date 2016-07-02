<?php



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgroAreas - App</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="in/plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="in/plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="in/plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="in/plugins/themify-icons/themify-icons.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="in/build/css/umega.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="user-page">
    <h1 class="fw-600 mt-0 mb-20">AgroAreas - App</h1>
    <form method="post" action="accionSLPost.php" class="form-horizontal">
    <input type="hidden" name="acc" value="login">
    <input type="hidden" name="obj" value="objUsuarioapp">
      <div class="form-group has-feedback">
        <div class="col-xs-12">
            <input type="text" name="email" id="email" aria-describedby="exampleInputEmail" placeholder="Email" class="form-control rounded"><span aria-hidden="true" class="ti-user form-control-feedback"></span><span id="exampleInputEmail" class="sr-only">(default)</span>
        </div>
      </div>
      <div class="form-group has-feedback">
        <div class="col-xs-12">
            <input type="password" name="password" id="password" aria-describedby="exampleInputPassword" placeholder="Password" class="form-control rounded"><span aria-hidden="true" class="ti-key form-control-feedback"></span><span id="exampleInputPassword" class="sr-only">(default)</span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12">
          <div class="checkbox-inline checkbox-custom pull-left">
            <input id="exampleCheckboxRemember" type="checkbox" value="remember">
            <label for="exampleCheckboxRemember">Recuerdame</label>
          </div>
          <div class="pull-right"><a href="javascript:;" class="inline-block form-control-static">Olvidó su contraseña?</a></div>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-success btn-raised btn-block">Ingresar</button>
    </form>
    <hr>
    <!--<p class="text-muted">Sign In with your Facebook Or Twitter accounts</p>
    <div class="clearfix">
      <div class="pull-left">
        <button type="button" class="btn btn-raised btn-primary"><i class="ti-facebook mr-5"></i> Facebook</button>
      </div>
      <div class="pull-right">
        <button type="button" class="btn btn-raised btn-info"><i class="ti-twitter-alt mr-5"></i> Twitter</button>
      </div>
    </div>-
    <hr>-->
    <div class="form-horizontal">
      <div class="clearfix">
        <div class="pull-left">
          <p class="form-control-static">Necesita una cuenta?</p>
        </div>
        <div class="pull-right"><a href="registro.php" class="btn btn-outline btn-default">Registrate</a></div>
      </div>
    </div>
    <!-- jQuery-->
    <script type="text/javascript" src="in/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="in/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>