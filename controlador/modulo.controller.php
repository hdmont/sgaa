<?php
class ModuloController{
    static public function ctrGetModules(){
        $modules = ModuleModelo::mdlGetModules();
        return $modules;
    }
}