<?php

if(isset($_GET['cerrar'])) {

  //Vaciamos y destruimos las variables de sesión
  $_SESSION['loginUsuario'] = NULL;
  $_SESSION['loginPassword'] = NULL;
  unset($_SESSION['LoginUsuario']);
  unset($_SESSION['loginPassword']);

  //Redireccionamos a la pagina index.php
  header('Location: ../vista/login.php');
}

?>