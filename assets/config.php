<?php
$conexion=mysqli_connect("localhost","root","","mascotasbariloche");
if(!$conexion) {("fallo la coneccion al servidor:".mysqli_error());}
mysqli_set_charset($conexion,"utf8");
date_default_timezone_set("America/Argentina/Buenos_Aires");


//$_SESSION["id_usuario"]=2; //temporal, cuando cree el login esto se borra.
?>
