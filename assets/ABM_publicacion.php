<?php
include "config.php";

$id_usuario=3;//Más adelante será $_SESSION["$id_usuario"];

$mensaje=$_POST["txt_mensaje"];
$tipo=0;//"Tipo 0 es perro perdido"

$sql=INSERT INTO `publicaciones` (`id_usuario`, `tipo`, `publicacion`)
                          VALUES ('$id_usuario', '$tipo', '$mensaje');


 ?>
