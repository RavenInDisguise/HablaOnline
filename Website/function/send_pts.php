<?php
    require("login.php");
    require("db_connect.php");
    $points = $_POST["puntos"];
    $type = $_POST["type"];

    if(session_verify() == false){
        echo 0;
        die();
    }
    $user = session_verify();
    $user_id = $user["id"];

    $envio = "INSERT INTO `points` (`user_id`, `points`, `game`) VALUES ('$user_id', '$points','$type')";

    $res = mysqli_query(conexion(),$envio);
    if( $res === false ){
        echo 0;
    }else{
        echo 1;
    }

?>