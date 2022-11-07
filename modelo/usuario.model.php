<?php
require_once "conexion.php";
class UsuarioModel{
    static public function mdlIniciarSesion($usuario, $password){
        $sentencia = Conexion::conectar()->prepare("select * from usuario u
                                                    inner join perfil p
                                                        on u.Usuario_Perfil_ID = p.Perfil_ID
                                                    inner join perfilmodulo pm
                                                        on pm.PerfilModulo_Perfil_ID = u.Usuario_Perfil_ID
                                                    inner join modulo m
                                                        on m.Modulo_ID = pm.PerfilModulo_Modulo_ID
                                                    where u.Usuario_User = :usuario
                                                    and u.Usuario_Password = :password
                                                    and pm.PerfilModulo_VistaInicio = 1");
        $sentencia->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $sentencia->bindParam(":password", $password, PDO::PARAM_STR);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_CLASS);
    }
}