<?php
class ModuloController{
    static public function ctrGetModules(){
        $modules = ModuleModelo::mdlGetModules();
        return $modules;
    }
    static public function ctrGetModulesPerfil($id_perfil){
        $modulesPerfil = ModuleModelo::mdlGetModulesPerfil($id_perfil);
        return $modulesPerfil;
    }
}