<?php
session_name("BRCMascotas");
session_start();
include "../assets/config.php";


$sql="SELECT p.`id`, p.`tipo`, p.`id_usuario`, p.`publicacion`, p.`fecha`, i.`imagen` FROM `publicaciones` p LEFT JOIN `imagenes` i ON (`i`.`id`=`p`.`id_imagen`) WHERE (`p`.`tipo`='3');";
//"SELECT `tipo`, `publicacion`, `fecha`, `id_imagen` FROM `publicaciones` INNER JOIN `imagenes` ON `imagenes`.`id`=`publicaciones`.`id_imagen` WHERE (tipo='0' OR tipo='1');";

$query= mysqli_query($conexion, $sql);
//  echo $sql;
while ($fila=mysqli_fetch_array($query)){

  $id=$fila["id"];
  $tipo=$fila["tipo"];
  $id_usuario=$fila["id_usuario"];
  $mensaje=$fila["publicacion"];
  $fecha=$fila["fecha"];

  $img="sinfoto.jpg";
  if ($fila["imagen"]){
    $img=$fila["imagen"];//$fila["urlimg"];
  }

  if ($tipo== 3) {//Adopcion amarillo
    $tipo= "warning";
  }


?>
<article>
 <div class="card text-center alert bg-<?=$tipo?>">
   <div class=""  style="height: 200px;
  background-size: cover;
  background-position-x: center;
  background-position-y: center;
  background-image: url('images/<?=$img?>');">
   </div>
   <!-- <img class="" src="images/<?=$img?>" alt=""> -->

   <br>
   <p> <?=$mensaje?> <?=$fecha?> </p>
     <div class="card-body">
       <a href="#" class="btn btn-<?=$tipo?> alert alert-light contactar_usuario" id_usuario="<?php echo $id_usuario; ?>" id_publicacion="<?php echo $id; ?>">Contactar Usuario</a>
     </div>
 </div>
</article>


<?php
}

 ?>
