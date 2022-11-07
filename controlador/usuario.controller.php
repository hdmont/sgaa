<?php
class UsuarioController{
    public function login(){
        if(isset($_POST["loginUsuario"])){
            $usuario = $_POST["loginUsuario"];
            $password = crypt($_POST["loginPassword"], '$2a$07$azybxcags23425sdg23sdfhsd$');
            $respuesta = UsuarioModel::mdlIniciarSesion($usuario, $password);
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
}