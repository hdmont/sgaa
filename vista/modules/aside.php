  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="vista/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SGAA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link active" onclick="LoadContent('vista/PanelPrincipal.php','content-wrapper')")>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Panel Principal
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('vista/Paciente.php','content-wrapper')")>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Paciente
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('vista/Reportes.php','content-wrapper')")>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Reportes
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('vista/Usuario.php','content-wrapper')")>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('vista/RolPerfil.php','content-wrapper')")>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Roles y Perfiles
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
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