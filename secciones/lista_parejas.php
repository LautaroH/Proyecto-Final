<?php
session_name("BRCMascotas");
session_start();
include "../assets/config.php";


$sql="SELECT p.`tipo`, p.`publicacion`, p.`fecha`, i.`imagen` FROM `publicaciones` p LEFT JOIN `imagenes` i ON (`i`.`id`=`p`.`id_imagen`) WHERE (`p`.`tipo`='4');";
//"SELECT `tipo`, `publicacion`, `fecha`, `id_imagen` FROM `publicaciones` INNER JOIN `imagenes` ON `imagenes`.`id`=`publicaciones`.`id_imagen` WHERE (tipo='0' OR tipo='1');";

$query= mysqli_query($conexion, $sql);
//  echo $sql;
while ($fila=mysqli_fetch_array($query)){


  $tipo=$fila["tipo"];
  $mensaje=$fila["publicacion"];
  $fecha=$fila["fecha"];

  $img="sinfoto.jpg";
  if ($fila["imagen"]){
    $img=$fila["imagen"];//$fila["urlimg"];
  }

  if ($tipo== 4) {//Parejas Rojo
    $tipo= "danger";
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
       <a href="#" class="btn btn-<?=$tipo?> alert alert-light">Contactar Usuario</a>
     </div>
 </div>
</article>


<?php
}

 ?>
