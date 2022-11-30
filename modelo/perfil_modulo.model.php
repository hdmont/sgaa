<?php

require_once "conexion.php";

class PerfilModuloModel{
    static public function mdlRegisterPerfilModulo($array_idModulos, $idPerfil, $id_modulo_inicio) {
        $total_registros = 0;
        if($idPerfil == 1) {
            $sentencia = Conexion::conectar()->prepare("delete from perfilmodulo
                                                        where PerfilModulo_Perfil_ID = :id_Perfil
                                                            and PerfilModulo_Modulo_ID !=5");
        }else {
            $sentencia = Conexion::conectar()->prepare("delete from perfilmodulo
                                                        where PerfilModulo_Perfil_ID = :id_Perfil");
        }
        $sentencia -> bindParam(":id_Perfil",$idPerfil,PDO::PARAM_INT);
        $sentencia -> execute();
        foreach ($array_idModulos as $value) {
            if($idPerfil == 1 && $value == 5) {
                $total_registros = $total_registros + 0;
            }else{
                if($value == $id_modulo_inicio) {
                    $vista_inicio = 1;
                }else{
                    $vista_inicio = 0;
                }
                $sentencia = Conexion::conectar()->prepare("insert into perfilmodulo(PerfilModulo_Perfil_ID,
                                                                                    PerfilModulo_Modulo_ID,
                                                                                    PerfilModulo_VistaInicio,
                                                                                    PerfilModulo_Estado)
                                                                        values(:id_Perfil,
                                                                                :id_modulo,
                                                                                :vista_inicio,
                                                                                1)");
                $sentencia -> bindParam(":id_Perfil",$idPerfil,PDO::PARAM_INT);
                $sentencia -> bindParam(":id_modulo",$value,PDO::PARAM_INT);
                $sentencia -> bindParam(":vista_inicio",$vista_inicio,PDO::PARAM_INT);
                if($sentencia->execute()) {
                    $total_registros = $total_registros + 1;
                }else{
                    $total_registros = 0;
                }
            }
        }
        return $total_registros;
    }
}