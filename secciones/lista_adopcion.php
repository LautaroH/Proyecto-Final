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




 <div class="modal fade" id="modal_chat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="txt_titulo" style="color:#000";>Nueva publicación</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form id="form_perdidos">
           <div class="chat">
           </div>
           <input class="mytext" placeholder="Escriba su mensaje"/>


           <!-- <textarea name="txt_mensaje" rows="8" cols="70"></textarea> -->
         </form>

         <div class="input-group mb-3">
           </div>
           <!-- UPLOAD FOto -->

 </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary" id="enviar">Enviar</button>

       </div>
     </div>
   </div>
 </div>
