<?php

    session_name("BRCMascotas");
    session_start();

    function connectDatabase() {

        $conexion=mysqli_connect("localhost","root","","mascotasbariloche");
        if(!$conexion) {("fallo la coneccion al servidor:".mysqli_error());}
        mysqli_set_charset($conexion,"utf8");
        date_default_timezone_set("America/Argentina/Buenos_Aires");

        return $conexion;

    }


    function listMessagesByIdUsuario($idUsuarioRemitente) {
        $conexion = connectDatabase();

        $sql = "SELECT * FROM `chat` WHERE `id_usuario` = ".$idUsuarioRemitente." AND `id_destinatario` = ". $_SESSION['id_usuario'];

        if($result = mysqli_query($conexion, $sql)){

            $mensajeList = array();

            while($obj = mysqli_fetch_object($result, "Chat")){
                array_push($mensajeList, $obj);
            }

            mysqli_close($conexion);

            return $mensajeList;
        }
        mysqli_close($conexion);

        return array();


    }

    function sendMessage($idDestinatario, $mensaje, $idPublicacion) {
      $conexion = connectDatabase();
      $sql= "INSERT INTO `chat` (`id_usuario`,`mensaje`,`id_destinatario`,`id_publicacion`) VALUES ('".$_SESSION['id_usuario']."','".$mensaje."','".$idDestinatario."','".$idPublicacion."')"
      mysqli_query($conexion,$sql);
      mysqli_close($conexion);

    }

    function listUsuarioMessage(){
        $conexion = connectDatabase();
        $sql="SELECT * FROM  `usuarios`JOIN `chat` ON `chat`.`id_usuario`=`usuarios`.id OR `chat`.`id_destinatario` = `usuarios`.`id` WHERE `usuarios`.`id`= ".$_SESSION['id_usuario'];


        if($result = mysqli_query($conexion, $sql)){

            $usuariosList = array();

            while($obj = mysqli_fetch_object($result, "Usuario")){
                array_push($usuariosList, $obj);
            }
            mysqli_close($conexion);


            return $usuariosList;
        }
        mysqli_close($conexion);

        return array();


    }




?>
