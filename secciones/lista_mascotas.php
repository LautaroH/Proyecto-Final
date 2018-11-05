<?php
session_name("BRCmascotas");
session_start();
include "../assets/config.php";


$sql="SELECT `tipo`, `publicacion`, `fecha`, `id_imagen` FROM `publicaciones` WHERE (tipo=0 OR tipo=1);";

$query= mysqli_query($conexion, $sql);
//  echo $sql;
while ($fila=mysqli_fetch_array($query)){




  $img="images/perdido3.jpg";//$fila["urlimg"];
  $tipo=$fila["tipo"];
  $mensaje=$fila["publicacion"];
  $fecha=$fila["fecha"];

  if ($tipo== 0) {//Perdidos azul
    $tipo= "primary";
  }else {//encontrados verdes
    $tipo="success";
  }
?>
  <article>
   <div class="card text-center alert bg-<?=$tipo?>">
     <img class="" src="<?=$img?>" alt="">
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
