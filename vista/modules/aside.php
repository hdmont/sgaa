<?php
  $menuUsuario = UsuarioController::ctrlGetMenuUsuario($_SESSION["usuario"]->Usuario_ID);
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
    <span class="brand-text font-weight-light">SGAA</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <h6 class="text-warning">Usuario: <?php echo $_SESSION["usuario"]->Usuario_Nombre. ' ' . $_SESSION["usuario"]->Usuario_Apellidos ?></h6>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php foreach ($menuUsuario as $menu) : ?>
          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link <?php if($menu->PerfilModulo_VistaInicio == 1) : ?>
                  <?php echo 'active'; ?>
                <?php endif; ?>"
              <?php if(!empty($menu->Modulo_Vista)) : ?>
                onclick="LoadContent('vista/<?php echo $menu->Modulo_Vista; ?>','content-wrapper')"
              <?php endif; ?>
              >
              <p>
                <?php echo $menu->Modulo_Nombre ?>
                <?php if(empty($menu->Modulo_Vista)) : ?>
                  <i class="right fas fa-angle-left"></i>
                <?php endif; ?>
              </p>
            </a>
            <?php if(empty($menu->Modulo_Vista)) : ?>
              <?php $subMenuUsuario = UsuarioController::ctrlGetSubMenuUsuario($menu->Modulo_ID); ?>
              <ul class="nav nav-treeview">
                <?php foreach ($subMenuUsuario as $subMenu) : ?>
                  <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link"
                      onclick="LoadContent('vista/<?php echo $subMenu->Modulo_Vista ?>','content-wrapper')">
                      <i class="nav-icon fas fa-th"></i>
                      <p><?php echo $subMenu->Modulo_Nombre; ?></p>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<script>
  $(".nav-link").on('click',function(){
    $(".nav-link").removeClass('active');
    $(this).addClass('active');
  })
</script>