<?php
require_once "../controlador/modulo.controller.php";
require_once "../modelo/modulo.model.php";

class AjaxModules{
    public function ajaxGetModules(){
        $modules = ModuloController::ctrGetModules();
        echo json_encode($modules);
    }
    public function ajaxGetModulesPerfil($id_perfil){
        $modulesPerfil = ModuloController::ctrGetModulesPerfil($id_perfil);
        echo json_encode($modulesPerfil);
    }
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){
    $modules = new AjaxModules;
    $modules->ajaxGetModules();
}
else if(isset($_POST['accion']) && $_POST['accion'] == 2){
    $modulesPerfil = new AjaxModules();
    $modulesPerfil->ajaxGetModulesPerfil($_POST["id_perfil"]);
}