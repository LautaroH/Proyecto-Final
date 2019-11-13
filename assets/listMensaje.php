<?php

  require_once("../entidades/chat.php");
  require_once('functions.php');

   $mensaje = $_GET['mensaje'];

  echo listMessagesByIdUsuario($idUsuarioRemitente);
  //var_dump($algo)
 ?>
