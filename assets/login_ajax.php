<?php
session_name("BRCMascotas");
session_start();
include "config.php";
//$_SESSION["id_usuario"]=2; //temporal, cuando cree el login esto se borra.

$usuario=$_POST['mail']; // El usuario se logea con el mail
$clave=$_POST['clave'];	//
//$clave=md5($clave);
$resultado="Falso";

$sql= "SELECT `id`, `usuario` FROM `usuarios` WHERE `mail`= '$usuario' AND `clave`= '$clave'";
		$query= mysqli_query($conexion, $sql);
			//  echo $sql;
			while ($fila=mysqli_fetch_array($query)){
				$resultado="encontre";
			  $_SESSION["id_usuario"]=$fila["id"];
			  $_SESSION["usuario"]=$fila["usuario"];

			}

echo $resultado;
echo $_SESSION["id_usuario"];


?>
