<?php
require_once "conexion.php";
class PerfilModel{
    static public function mdlGetPerfiles(){
        $sentencia = Conexion::conectar()->prepare("SELECT Perfil_ID, Perfil_Descripcion, Perfil_Estado, '' as opciones
                                                    FROM perfil
                                                    ORDER BY Perfil_ID");
        $sentencia -> execute();
        return $sentencia->fetchAll();
    }
}