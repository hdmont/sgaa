<?php
require_once "conexion.php";
class ModuleModelo{
    static public function mdlGetModules(){
        $sentencia = Conexion::conectar()->prepare("SELECT Modulo_ID AS id,
                                                    CASE
                                                        WHEN Modulo_Padre IS NULL THEN '#'
                                                        ELSE Modulo_Padre END AS parent,
                                                    Modulo_Nombre AS text,
                                                    CASE
                                                        WHEN Modulo_Vista IS NULL THEN ''
                                                        ELSE Modulo_Vista END AS vista
                                                    FROM modulo
                                                    ORDER BY Modulo_ID;");
        $sentencia -> execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    static public function mdlGetModulesPerfil($id_perfil){
        $sentencia = Conexion::conectar()->prepare("SELECT	Modulo_ID,
		                                            Modulo_Nombre,
                                                    IFNULL(
                                                        CASE WHEN (
                                                            m.Modulo_Vista IS NULL OR m.Modulo_Vista = '')
                                                            THEN '0'
                                                            ELSE (
                                                            (SELECT '1' FROM perfilmodulo pm
                                                            WHERE pm.PerfilModulo_Modulo_ID = m.Modulo_ID
                                                            AND pm.PerfilModulo_Perfil_ID = :id_perfil))
                                                            END,0) AS sel
                                                    FROM modulo m
                                                    ORDER BY m.Modulo_ID");
        $sentencia -> bindParam(":id_perfil",$id_perfil,PDO::PARAM_INT);
        $sentencia -> execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}