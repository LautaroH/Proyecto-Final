<?php

  require_once("../entidades/chat.php");
  require_once('functions.php');

   $idUsuarioRemitente = $_GET['idUsuarioRemitente'];

  echo json_encode(listMessagesByIdUsuario($idUsuarioRemitente));
  // var_dump($algo)
 ?>
