<?php
require_once "../controlador/perfil.controller.php";
require_once "../modelo/perfil.model.php";

class AjaxPerfiles{
    public function ajaxGetPerfiles(){
        $perfiles = PerfilController::ctrGetPerfiles();
        echo json_encode($perfiles);
    }
}

IF(isset($_POST['accion']) && $_POST['accion'] == 1){
    $perfiles = new AjaxPerfiles;
    $perfiles->ajaxGetPerfiles();
}