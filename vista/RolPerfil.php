<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Módulos y Roles</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Módulos y Roles</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->

  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="content">
  <div class="container-fluid">
    <ul class="nav nav-tabs" id="tabs-asignar-modulos-perfil" role="tablist">
      <li class="nav-item">
        <a class="nav-link" id="content-perfiles-tab" data-toggle="pill" href="#content-perfiles" role="tab"
          aria-controls="content-perfiles" aria-selected="false">Roles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="content-modulos-tab" data-toggle="pill" href="#content-modulos" role="tab"
          aria-controls="content-perfiles" aria-selected="false">Módulos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="content-modulo-perfil-tab" data-toggle="pill" href="#content-modulo-perfil" role="tab"
          aria-controls="content-perfiles" aria-selected="false">Asignar Módulo a Rol</a>
      </li>
    </ul>
    <div class="tab-content" id="tabsContent-asignar-modulos-perfil">
      <div class="tab-pane fade mt-4 px-4" id="content-perfiles" role="tabpanel" aria-labelledby="content-perfiles-tab">
        <h4>Administrar Roles</h4>
      </div>
      <div class="tab-pane fade mt-4 px-4" id="content-modulos" role="tabpanel" aria-labelledby="content-modulos-tab">
        <h4>Administrar Módulos</h4>
      </div>
      <div class="tab-pane fade active show mt-4 px-4" id="content-modulo-perfil" role="tabpanel"
        aria-labelledby="content-modulo-perfil-tab">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-info card-outline shadow">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list"></i> Listado de Roles</h3>
              </div>
              <div class="card-body">
                <table id="tbl_perfiles_asignar" class="display nowrap table-striped w-100 shadow rounded">
                  <thead class="bg-info text-left">
                    <th>Id Rol</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th class="text-center">Opciones</th>
                  </thead>
                  <tbody class="small text-left">

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-info card-outline shadow" style="display:block" id="card-modulos">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-laptop"></i> Módulos del Sistema</h3>
              </div>
              <div class="card-body" id="card-body-modulos">
                <div class="row m-2">
                  <div class="col-md-6">
                    <button class="btn btn-success btn-small m-0 p-0 w-100" id="marcar_modulos">Seleccionar
                      todo</button>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-danger btn-small m-0 p-0 w-100" id="desmarcar_modulos">Quitar todo</button>
                  </div>
                </div>
                <div id="modulos" class="demo"></div>
                <div class="row m-2">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Seleccione el módulo de inicio</label>
                      <select class="custom-select" id="select_modulos"></select>
                    </div>
                  </div>
                </div>
                <div class="row m-2">
                  <div class="col-md-12">
                    <button class="btn btn-success btn-small w-50 text-center" id="asignar_modulos">Asignar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function()){
    var tbl_perfiles_asignar;
    cargarDataTables();
    function cargarDataTables(){
      tbl_perfiles_asignar = $('#tbl_perfiles_asignar').DataTable({
        "language":{
          "url":"//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
      });
    }
  }    
</script>