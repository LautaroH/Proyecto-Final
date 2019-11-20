<?php

  /*equire_once("../entidades/usuario.php");*/

  require_once('functions.php');

    $idDestinatario = $_POST['idDestinatario'];
    $mensaje = $_POST['mensaje'];
    $idPublicacion = $_POST['idPublicacion'];

    sendMessage($idDestinatario, $mensaje, $idPublicacion);

    echo "OK";
 ?>
