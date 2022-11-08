<?php
require_once "conexion.php";
class UsuarioModel{
    static public function mdlInnitSesion($usuario, $password){
        $sentencia = Conexion::conectar()->prepare("SELECT * FROM usuario u
                                                    INNER JOIN perfil p
                                                        ON u.`Usuario_Perfil_ID` = p.`Perfil_ID`
                                                    INNER JOIN perfilmodulo pm
                                                        ON pm.`PerfilModulo_Perfil_ID` = u.`Usuario_Perfil_ID`
                                                    INNER JOIN modulo m
                                                        ON m.`Modulo_ID` = pm.`PerfilModulo_Modulo_ID`
                                                    WHERE u.`Usuario_User` = :usuario
                                                    AND u.`Usuario_Password` = :password
                                                    AND pm.`PerfilModulo_VistaInicio` = 1");
        $sentencia->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $sentencia->bindParam(":password", $password, PDO::PARAM_STR);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_CLASS);
    }
    static public function mdlGetMenuUsuario($id_usuario){
        $sentencia = Conexion::conectar()->prepare("SELECT m.`Modulo_ID`, m.`Modulo_Nombre`, m.`Modulo_Vista`, pm.`PerfilModulo_VistaInicio` FROM usuario u
                                                    INNER JOIN perfil p
                                                        ON u.`Usuario_Perfil_ID` = p.`Perfil_ID`
                                                    INNER JOIN perfilmodulo pm
                                                        ON pm.`PerfilModulo_Perfil_ID` = p.`Perfil_ID`
                                                    INNER JOIN modulo m
                                                        ON m.`Modulo_ID` = pm.`PerfilModulo_Modulo_ID`
                                                    WHERE u.`Usuario_ID` = :id_usuario
                                                    and m.`Modulo_Padre` IS NULL
                                                    ORDER BY m.`Modulo_ID`");
        $sentencia->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_CLASS);
    }
    static public function mdlGetSubMenuUsuario($idMenu){
        $sentencia = Conexion::conectar()->prepare("SELECT m.`Modulo_ID`, m.`Modulo_Nombre`, m.`Modulo_Vista` FROM modulo m
                                                    WHERE m.`Modulo_Padre` = :idMenu
                                                    ORDER BY m.`Modulo_ID`");
        $sentencia->bindParam(":idMenu", $idMenu, PDO::PARAM_STR);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_CLASS);        
    }
}