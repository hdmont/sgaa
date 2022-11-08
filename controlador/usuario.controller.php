<?php
class UsuarioController{
    public function login(){
        if(isset($_POST["loginUsuario"])){
            $usuario = $_POST["loginUsuario"];
            $password = crypt($_POST["loginPassword"], '$2a$07$azybxcags23425sdg23sdfhsd$');
            $respuesta = UsuarioModel::mdlInnitSesion($usuario, $password);
            if(count($respuesta) > 0){
                $_SESSION["usuario"] = $respuesta[0];
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
    static public function ctrlGetMenuUsuario($id_usuario){
        $menuUsuario = UsuarioModel::mdlGetMenuUsuario($id_usuario);
        return $menuUsuario;
    }
    static public function ctrlGetSubMenuUsuario($idMenu){
        $subMenuUsuario = UsuarioModel::mdlGetSubMenuUsuario($idMenu);
        return $subMenuUsuario;
    }

}