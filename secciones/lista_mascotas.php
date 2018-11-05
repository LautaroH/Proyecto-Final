<?php
session_name("BRCmascotas");
session_start();
include "../assets/config.php";


$sql="SELECT `tipo`, `publicacion`, `fecha`, `id_imagen` FROM `publicaciones` WHERE (tipo=0 OR tipo=1);";

$query= mysqli_query($conexion, $sql);
//  echo $sql;
while ($fila=mysqli_fetch_array($query)){



  $tipo=$fila["tipo"];
  $mensaje=$fila["publicacion"];
  $fecha=$fila["fecha"]
  $img="../images/perdido3.jpg";//$fila["urlimg"];

?>
  <article>
   <div class="card text-center alert bg-success">
     <img class="" src="<?=$img?>" alt="">
     <br>
     <p> <?=$mensaje?> <?=$fecha?> </p>

       <div class="card-body">
         <a href="#" class="btn btn-success alert alert-light">Contactar Usuario</a>
       </div>
   </div>
 </article>

<?php
}

 ?>
