<?php
require_once "../controlador/modulo.controller.php";
require_once "../modelo/modulo.model.php";

class AjaxModules{
    public function ajaxGetModules(){
        $modules = ModuloController::ctrGetModules();
        echo json_encode($modules);
    }
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){
    $modules = new AjaxModules;
    $modules->ajaxGetModules();
}