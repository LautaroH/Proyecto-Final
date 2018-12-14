<?php
session_name("BRCMascotas");
session_start();
include "config.php";
//$_SESSION["id_usuario"]=2; //temporal, cuando cree el login esto se borra.

$usuario=$_POST['mail']; // El usuario se logea con el mail
$nombre=$_POST['usuario']; //es el nombre del usuario.
$clave=$_POST['clave'];	//
//$clave=md5($clave);
$resultado="Falso";

//INSERT INTO `usuarios`(`usuario`, `clave`, `mail`) VALUES ('Carlos', 'carlos123', 'carlos@gmail.com')
$sql= "INSERT INTO `usuarios`(`usuario`, `clave`, `mail`)  VALUES ('$nombre', '$clave', '$usuario')";
		$query= mysqli_query($conexion, $sql);
		$last_id = mysqli_insert_id($conexion);

			$_SESSION["id_usuario"]=$last_id;
			$_SESSION["usuario"]=$nombre;


			//  echo $sql;
echo $resultado;
//echo $_SESSION["id_usuario"];


?>
