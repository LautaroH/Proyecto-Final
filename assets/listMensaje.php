<?php

  require_once("../entidades/chat.php");
  require_once('functions.php');

   $idUsuarioRemitente = $_GET['idUsuarioRemitente'];

  echo listMessagesByIdUsuario($idUsuarioRemitente);
  // var_dump($algo)
 ?>
