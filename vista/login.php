<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SGAA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vista/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    
    <div class="login-box">
    <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1 class="h1"><b>SGAA</b></h1>
            </div>
        </div>
        <div class="card-body">
            <form method="post" class="needs-validation-login" novalidate>
                <!-- INGRESO DEL USUARIO -->
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Usuario" name="loginUsuario" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">Por favor ingresar el usuario.</div>
                </div>
                <!-- INGRESO DE LA CONTRASEÑA -->
                <div class="input-group mb-3">
                    <input class="form-control" type="password" placeholder="Contraseña" name="loginPassword" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">Por favor ingresar la contraseña.</div>
                </div>

                <!-- BOTON DE INGRESO -->
                <div class="row">
                    <?php
                        $login = new UsuarioController();
                        $login->login();
                    ?>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-info">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="vista/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="vista/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="vista/assets/dist/js/adminlte.min.js"></script>
</body>
</html>
