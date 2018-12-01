<?php
session_name("BRCMascotas");
session_start();
include "config.php";

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$clave=md5($clave);
$query=mysql_query("select * from usuario");
$numerofilas = mysql_num_rows($query);
for($i=0;$i<=$numerofilas;$i++){
	$extraido=mysql_fetch_array($query);
		if($usuario==$extraido['usuario_name'] and $extraido['usuario_pass']==$clave){
			session_start();
			$_session["usuario"]=$usuario;
			$_session["autenticado"]="si";
			echo "hola";
			//header("location:mis_datos.php?logeado=1");
			//exit();
		}



}
//header("location:iniciar_sesion.php?error=8");
//exit();

?>
