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

        $sql = "SELECT * FROM `chat` WHERE `id_usuario` = ".$idUsuarioRemitente." AND `id_destinatario` = ". $_SESSION['id_usuario'] . " ORDER BY `fecha` DESC";

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

    function sendMessage($idUsuarioReceptor, $mensaje, $idPublicacion) {

    }

    function listContactsMessages() {

    }




?>