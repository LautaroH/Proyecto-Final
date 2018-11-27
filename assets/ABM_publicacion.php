<?php
session_name("BRCmascotas");
session_start();
include "config.php";

$id_usuario=$_SESSION["id_usuario"];

$mensaje=$_POST["txt_mensaje"];
$tipo=$_POST["tipo"];//"Tipo 0 es perro perdido"
$id_foto=$_POST["id_foto"];

$sql="INSERT INTO `publicaciones` (`id_usuario`, `tipo`, `publicacion`,`id_imagen`)
                          VALUES ('$id_usuario', '$tipo', '$mensaje', '$id_foto')";

  $query= mysqli_query($conexion, $sql);
  echo $sql;
 ?>
