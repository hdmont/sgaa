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
}