<?php
    session_name("BRCMascotas");

    require_once("../entidades/usuario.php");
    require_once("../entidades/chat.php");
    require_once("../assets/functions.php");
 ?>

 <body>

     <div class="container">
         <!-- <h3 class=" text-center">Messaging</h3> -->
         <div id="line">
           <div class="dline"></div>
           <h1>Mensajes</h1>
           <div class="dline"></div>
         </div>
         <div class="messaging">
             <div class="inbox_msg">
                 <div class="inbox_people">
                     <div class="headind_srch">
                         <div class="recent_heading">
                             <h4>Recent</h4>
                         </div>
                         <div class="srch_bar">
                             <div class="stylish-input-group"></div>
                         </div>
                     </div>

                     <!-- Listado de personas con las que se tienen mensajes. -->
                     <div class="inbox_chat">
                         <div class="chat_list active_chat">
                             <div class="chat_people">
                                 <?php

                                 $usuariosList = listUsuarioMessage();

                                 foreach ($usuariosList as $usuario) {

                                     $ultimoMensaje = findLastMessage($usuario->id);
                                     $ultimoMensajeText = "(El usuario no envió mensajes)";

                                     if($ultimoMensaje != null) {
                                         $ultimoMensajeText = $ultimoMensaje->mensaje;
                                     }

                             ?>
                                 <a href="#" class="usuarioChat" <?php echo 'id_usuario="'.$usuario->id.'"'; ?>>
                                     <div class="chat_ib">
                                         <h5><?php echo $usuario->usuario ?><span class="chat_date"></span>
                                         </h5>
                                         <p><?php echo $ultimoMensajeText; ?></p>
                                     </div>
                                 </a>
                                 <?php
                                 }
                             ?>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div class="mesgs">
                     <div id="msg_history" class="msg_history">
                         <div class="incoming_msg">
                             <!-- Mensaje entrante -->
                             <div class="received_msg">
                                 <div class="received_withd_msg">
                                     <p>Para conversar con un usuario pulsá sobre su nombre</p>
                                     <span class="time_date"></span>
                                 </div>
                             </div>
                         </div>

                         <!-- Mensaje saliente -->
                         <div class="outgoing_msg">
                             <div class="sent_msg">
                                 <p>Para iniciar una conversación nueva pulsá "Contactar" sobre un anuncio</p>
                                 <span class="time_date"> </span>
                             </div>
                         </div>
                     </div>

                     <div class="type_msg">
                         <div class="input_msg_write">
                             <input id="messageText" type="text" class="write_msg" placeholder="Type a message" />

                             <button id="btnSendMessage" class="msg_send_btn" type="button"><i
                                     class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     </html>

     <script>

         var usuarioChatActual = null;

         $("#btnSendMessage").on("click", function () {
             sendMessage();
         });

         $(".usuarioChat").on("click", function () {
             chatWith($(this).attr("id_usuario"));
         })


         function chatWith(idUsuario) {
             usuarioChatActual = idUsuario;

             $("#messageText").val("");
             updateMessagesBody(idUsuario);
         }

         function sendMessage() {



             let texto = $("#messageText").val();
             if(!usuarioChatActual) return alert("No hay ningún usuario seleccionado para chatear.");
             if (!texto) return alert("Debes escribir el texto a enviar.");

             $.ajax({
                 url: 'assets/sendMessage.php',
                 data: "idDestinatario="+usuarioChatActual+"&mensaje="+texto+"&idPublicacion=0",
                 method: 'POST',
                 success: function(data) {
                     updateMessagesBody(usuarioChatActual);
                 },
                 error: function(error) {
                     alert(error);
                 }
             })


             $("#messageText").val("");
         }


         setInterval(function () {
             if(usuarioChatActual != null) {
                 updateMessagesBody(usuarioChatActual);
             }
         }, 5000);

         function updateMessagesBody(idUsuario) {

             $.ajax({
                 url: 'assets/listMensaje.php?idUsuarioRemitente=' + idUsuario,
                 method: 'GET',
                 success: function (data) {

                     $("#msg_history").html("");

                     var html = "";

                     var lista = JSON.parse(data);

                     for (var i = 0; i < lista.length; i++) {

                         if (lista[i].id_usuario == <?php echo $_SESSION['id_usuario']; ?>) {

                             html += "<div class=\"outgoing_msg\">"+
                                         "<div class=\"sent_msg\">"+
                                             "<p>"+lista[i].mensaje+"</p>"+
                                             "<span class=\"time_date\">"+lista[i].fecha+"</span>"+
                                         "</div>"+
                                     "</div>";

                         } else {

                             html += "<div class=\"incoming_msg\">"+
                             "<div class=\"received_msg\">"+
                                 "<div class=\"received_withd_msg\">"+
                                     "<p>"+lista[i].mensaje+"</p>"+
                                     "<span class=\"time_date\">"+lista[i].fecha+"</span>"+
                                     "</div>"+
                                 "</div>"+
                             "</div>";
                         }
                     }

                     $("#msg_history").html(html);
                 }
             });

         }



     </script>




<!-- CSS -->
<head>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
        rel="stylesheet" />
    <style type="text/css">
        .container {
            max-width: 1170px;
            margin: auto;
        }

        img {
            max-width: 100%;
        }

        .inbox_people {
            background: #f8f8f8 none repeat scroll 0 0;
            float: left;
            overflow: hidden;
            width: 40%;
            border-right: 1px solid #c4c4c4;
        }

        .inbox_msg {
            border: 1px solid #c4c4c4;
            clear: both;
            overflow: hidden;
        }

        .top_spac {
            margin: 20px 0 0;
        }


        .recent_heading {
            float: left;
            width: 40%;
        }

        .srch_bar {
            display: inline-block;
            text-align: right;
            width: 60%;
        }

        .headind_srch {
            padding: 10px 29px 10px 20px;
            overflow: hidden;
            border-bottom: 1px solid #c4c4c4;
        }

        .recent_heading h4 {
            color: #05728f;
            font-size: 21px;
            margin: auto;
        }

        .srch_bar input {
            border: 1px solid #cdcdcd;
            border-width: 0 0 1px 0;
            width: 80%;
            padding: 2px 0 4px 6px;
            background: none;
        }

        .srch_bar .input-group-addon button {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            padding: 0;
            color: #707070;
            font-size: 18px;
        }

        .srch_bar .input-group-addon {
            margin: 0 0 0 -27px;
        }

        .chat_ib h5 {
            font-size: 15px;
            color: #464646;
            margin: 0 0 8px 0;
        }

        .chat_ib h5 span {
            font-size: 13px;
            float: right;
        }

        .chat_ib p {
            font-size: 14px;
            color: #989898;
            margin: auto
        }

        .chat_img {
            float: left;
            width: 11%;
        }

        .chat_ib {
            float: left;
            padding: 0 0 0 15px;
            width: 88%;
        }

        .chat_people {
            overflow: hidden;
            clear: both;
        }

        .chat_list {
            border-bottom: 1px solid #c4c4c4;
            margin: 0;
            padding: 18px 16px 10px;
        }

        .inbox_chat {
            height: 550px;
            overflow-y: scroll;
        }

        .active_chat {
            background: #ebebeb;
        }

        .incoming_msg_img {
            display: inline-block;
            width: 6%;
        }

        .received_msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: 92%;
        }

        .received_withd_msg p {
            background: #ebebeb none repeat scroll 0 0;
            border-radius: 3px;
            color: #646464;
            font-size: 14px;
            margin: 0;
            padding: 5px 10px 5px 12px;
            width: 100%;
        }

        .time_date {
            color: #747474;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
        }

        .received_withd_msg {
            width: 57%;
        }

        .mesgs {
            float: left;
            padding: 30px 15px 0 25px;
            width: 60%;
        }

        .sent_msg p {
            background: #05728f none repeat scroll 0 0;
            border-radius: 3px;
            font-size: 14px;
            margin: 0;
            color: #fff;
            padding: 5px 10px 5px 12px;
            width: 100%;
        }

        .outgoing_msg {
            overflow: hidden;
            margin: 26px 0 26px;
        }

        .sent_msg {
            float: right;
            width: 46%;
        }

        .input_msg_write input {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            color: #4c4c4c;
            font-size: 15px;
            min-height: 48px;
            width: 100%;
        }

        .type_msg {
            border-top: 1px solid #c4c4c4;
            position: relative;
        }

        .msg_send_btn {
            background: #05728f none repeat scroll 0 0;
            border: medium none;
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            height: 33px;
            position: absolute;
            right: 0;
            top: 11px;
            width: 33px;
        }

        .messaging {
            padding: 0 0 50px 0;
        }

        .msg_history {
            height: 516px;
            overflow-y: auto;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
