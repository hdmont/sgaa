<?php
class PerfilController{
    static public function ctrGetPerfiles(){
        $modules = PerfilModel::mdlGetPerfiles();
        return $modules;
    }
}