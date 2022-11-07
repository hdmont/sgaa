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
        if(count($respuesta) > 0){
            $_SESSION["usuario"] = $respuesta(0);
            echo '
                <script>
                    window.location = "http://localhost/sgaa/"
                </script>
            ';
        }
        else{
            echo '
                <script>
                    fncSweetAlert(
                        "error",
                        "Usuario o contraseña incorrecta",
                        "http://localhost/sgaa/"
                    );
                </script>
            ';
        }
    }
}