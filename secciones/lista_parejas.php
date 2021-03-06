<?php
session_name("BRCMascotas");
session_start();
include "../assets/config.php";

$idUsuarioActual = null;
if(isset($_SESSION['id_usuario'])) {
  $idUsuarioActual = $_SESSION['id_usuario'];
}


$sql="SELECT p.`id`, p.`tipo`, p.`id_usuario`, p.`publicacion`, p.`fecha`, i.`imagen` FROM `publicaciones` p LEFT JOIN `imagenes` i ON (`i`.`id`=`p`.`id_imagen`) WHERE (`p`.`tipo`='4');";
//"SELECT `tipo`, `publicacion`, `fecha`, `id_imagen` FROM `publicaciones` INNER JOIN `imagenes` ON `imagenes`.`id`=`publicaciones`.`id_imagen` WHERE (tipo='0' OR tipo='1');";

$query= mysqli_query($conexion, $sql);
//  echo $sql;
while ($fila=mysqli_fetch_array($query)){

  $id=$fila["id"];
  $tipo=$fila["tipo"];
  $mensaje=$fila["publicacion"];
  $id_usuario=$fila["id_usuario"];
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

    <?php

    if($idUsuarioActual == $id_usuario) {
      ?>
      <a href="#" class="btn btn-<?=$tipo?> alert alert-light">Ésta publicación es tuya</a>

    <?php
    } else {

    ?>
      <a href="#" class="btn btn-<?=$tipo?> alert alert-light iniciar_chat_usuario" id_usuario="<?php echo $id_usuario; ?>" id_publicacion="<?php echo $id; ?>">Contactar Usuario</a>
    <?php
    }

    ?>

   </div>
 </div>
</article>


<?php
}

 ?>



 <div class="modal fade" id="modal_chat_parejas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="txt_titulo" style="color:#000";>Mensaje</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
           <input id="messageText" class="form-control" placeholder="Escriba su mensaje"/>

 </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary" id="enviarMensajeParejas">Enviar</button>

       </div>
     </div>
   </div>
 </div>


 <script>

    var usuarioChatActual = null;
    var idPublicacion = null;

    $(".iniciar_chat_usuario").on("click", function(){

      usuarioChatActual = $(this).attr("id_usuario");
      idPublicacion = $(this).attr("id_publicacion");

      $("#modal_chat_parejas").modal("show");

    });

    $("#enviarMensajeParejas").on("click", function() {
      var texto = $("#messageText").val();
      $("#messageText").val("");

      sendMessage(usuarioChatActual, idPublicacion, texto);
    })

    function sendMessage(id_usuario, id_publicacion, mensaje){

        if(!id_usuario) return alert("No hay ningún usuario seleccionado para chatear.");
        if (!mensaje) return alert("Debes escribir el texto a enviar.");



        $.ajax({
            url: 'assets/sendMessage.php',
            data: "idDestinatario="+usuarioChatActual+"&mensaje="+mensaje+"&idPublicacion=" + idPublicacion,
            method: 'POST',
            success: function(data) {
                alert("Mensaje enviado, para continuar la conversación acceda a 'Mensajes'");
            },
            error: function(error) {
                alert(error);
            }
        });
        $("#modal_chat_parejas").modal("hide");

    }
    </script>
