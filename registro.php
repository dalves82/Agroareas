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
    <!-- Sweet Alert-->
    <link rel="stylesheet" type="text/css" href="in/plugins/bootstrap-sweetalert/lib/sweet-alert.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="user-page">
    <h1 class="fw-600 mt-0 mb-20">AgroAreas App</h1>
    <form method="post" action="accionSLPost.php" class="form-horizontal" id="frmRegistro" >
    <input type="hidden" name="acc" value="registro">
    <input type="hidden" name="obj" value="objUsuarioapp">
    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" placeholder="Nombre" name="nombre" class="form-control rounded" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12">
            <input type="text" placeholder="Apellido" name="apellido" class="form-control rounded" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12">
            <input type="email" placeholder="Email" name="email" class="form-control rounded" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12">
            <input type="password" placeholder="Contraseña" name="password" id="password" class="form-control rounded" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12">
            <input type="password" placeholder="Confirma tu contraseña" name="password2" id="password2" class="form-control rounded" required>
        </div>
      </div>
      <!--<div class="form-group">
        <div class="col-xs-12">
          <div class="checkbox-inline checkbox-custom">
            <input id="exampleCheckboxAgree" type="checkbox" value="remember">
            <label for="exampleCheckboxAgree">Agree the terms and policy</label>
          </div>
        </div>
      </div>-->
      <button type="submit" class="btn btn-lg btn-success btn-raised btn-block" id="btnRegistrarme">Registrarme</button>
    </form>
    <hr>
    <!--<p class="text-muted">Sign Up with your Facebook Or Twitter accounts</p>
    <div class="clearfix">
      <div class="pull-left">
        <button type="button" class="btn btn-raised btn-primary"><i class="ti-facebook mr-5"></i> Facebook</button>
      </div>
      <div class="pull-right">
        <button type="button" class="btn btn-raised btn-info"><i class="ti-twitter-alt mr-5"></i> Twitter</button>
      </div>
    </div>
    <hr>-->
    <div class="form-horizontal">
      <div class="clearfix">
        <div class="pull-left">
          <p class="form-control-static">Ya tienes una cuenta?</p>
        </div>
        <div class="pull-right"><a href="login.html" class="btn btn-outline btn-default">Inicia sesión</a></div>
      </div>
    </div>
    <!-- jQuery-->
    <script type="text/javascript" src="in/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="in/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Sweet Alert-->
    <script type="text/javascript" src="in/plugins/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
    
    <script>
        
        $(document).ready(function(){
            
            $( "#frmRegistro" ).submit(function(event) {
		
                largoPass1 = $('#password').val().length;
                
                if(largoPass1<8){
                    event.preventDefault();
                    swal({
                        title: "La contraseña es demasiado corta",
                        text: "Escribe una contraseña de al menos 8 caracteres",
                        type: "error",
                        confirmButtonClass: "btn-raised btn-danger",
                        confirmButtonText: "OK"
                    });
                    $('#password2').val('');
                    $('#password1').select();
                }else{
                
                    if($('#password').val() !== $('#password2').val()){

                        event.preventDefault();

                        swal({
                            title: "Las contraseñas no coinciden",
                            text: "Verifica la contraseña",
                            type: "error",
                            confirmButtonClass: "btn-raised btn-danger",
                            confirmButtonText: "OK"
                        });

                        $('#password2').select();                        
                    }
                }
            }); 
            
        });
    
    </script>
  
  </body>
</html>