<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SGAA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="vista/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vista/assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="vista/assets/dist/css/template.css">
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="vista/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="vista/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="vista/assets/dist/js/adminlte.min.js"></script>
    <script src="vista/assets/dist/js/plantilla.js"></script>
  </head>
<?php if(isset($_SESSION["usuario"])): ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
        
        <?php
            //include "modules/navbar.php";
            include "modules/aside.php";
        ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php include "vistas/". $_SESSION['usuario']->vista ?>
      </div>
      <!-- /.content-wrapper -->

        <?php
            include "modules/footer.php";
        ?>

    </div>
    <!-- ./wrapper -->
        <script>
            function LoadContent(pagina_php,container){
                $("." + container).load(pagina_php);
            }
        </script>
  </body>
<?php else: ?>
  <body>
    <?php include "vista/login.php" ?>
  </body>
<?php endif; ?>
  </html>