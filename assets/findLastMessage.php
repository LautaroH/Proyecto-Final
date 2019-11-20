<?php

  require_once("../entidades/Chat.php");
  require_once('functions.php');

   // $idUsuarioRemitente = $_GET['idUsuarioRemitente'];

  // echo findUsuarioByID(15);

  $mensaje = $_GET['mensaje'];

  echo findLastMessage();
   //var_dump(findLastMessage(14));
 ?>
