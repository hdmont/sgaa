<?php
class PerfilModuloController{
    static public function ctrRegisterPerfilModulo($array_idModulos, $idPerfil, $id_modulo_inicio) {
        $registroPerfilModulo = PerfilModuloModel::mdlRegisterPerfilModulo($array_idModulos, $idPerfil, $id_modulo_inicio);
        return $registroPerfilModulo;
    }
}