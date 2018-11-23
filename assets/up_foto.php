<?php
session_name("BRCMascotas");
session_start();
include "config.php";

$id_usuario=$_SESSION["id_usuario"];

$maxSize= 1000000;
$target_dir = "../images/";


$fileSize=$_FILES['foto']['size'];
$nombre =basename($_FILES["foto"]["name"]);

$nombre=strtr($nombre, "áéíóúüAÉÍÓÚñÑ","aeiouuAEIOUnN");
//strtr es una función que reemplaza una caracteristicas por otro en un string en este caso reemplaza aquellos caracteres no permitidos en un nombre de archivos
$nombre=strtr($nombre," ","_");
$fileDestino = $target_dir . $nombre ;
//$_Files me permite obtener los datos del archivo a subir en un array
$imageType= strtolower(pathinfo($fileDestino,PATHINFO_EXTENSION));

//echo $imageType;

if($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg"
&& $imageType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}



if ($fileSize > $maxSize) {
	echo "El archivo que intenta subir es muy grande";
}

if ($_FILES['foto']['error']==0){


	move_uploaded_file($_FILES['foto']['tmp_name'],$fileDestino);
}

$sql="INSERT INTO `imagenes` (`id_usuario`, `size`, `imagen`)
                          VALUES ('$id_usuario', '$fileSize', '$nombre')";
  $query= mysqli_query($conexion, $sql);
  $last_id = mysqli_insert_id($conexion);

  echo $last_id;
// header("location:index.php?error=1");
exit();
?>
