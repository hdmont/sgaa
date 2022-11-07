<?php
class UsuarioController{
    public function login(){
        if(isset($_POST["loginUsuario"])){
            $usuario = $_POST["loginUsuario"];
            $password = crypt($_POST["loginPassword"], '$2a$07$azybxcags23425sdg23sdfhsd$');
            $respuesta = UsuarioModel::mdlIniciarSesion($usuario, $password);
        }
    }
}