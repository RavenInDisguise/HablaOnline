<?php
    DEFINE("SESSION_NAME","validado_en_HablaOnline");
    function compare($mail,$pass){
        $compare = "SELECT * FROM users WHERE email='$mail' AND password=MD5('$pass')";
        $res = query($compare);
        if($res == null){
            return false;
        }
        else{
            gen_session($res[0],$res[2]);
            return true;
        }
    }

    function gen_session($id,$user){
        @session_start();
        $_SESSION[SESSION_NAME] = ["id"=>$id,"user"=>$user];
    }

    function session_verify(){
        @session_start();
        if(isset($_SESSION[SESSION_NAME])){
            return $_SESSION[SESSION_NAME];
        }
        else{
            return false;
        }
    }

    function logout(){
        @session_start();
        unset($_SESSION[SESSION_NAME]);
    }

    /*
    function registrar($mail,$user,$pass){
        $registro = "INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES (NULL, '$mail', '$user', MD5('$pass')";
        $res_re = query($registro);
        var_dump($res_re);
    }
    */

    if(isset($_GET["iniciando"])){
        $ini = compare($_POST["mail"],$_POST["pwd"]);
        if($ini){
            header("Location: ?success");
        }
        else{
            header("Location: ?error");
        }
    }
    
    if(isset($_GET["close_session"])){
        logout();
        header("Location: ?start");
    }

    /*
    if(isset($_GET["registro_usuario"])){
        if(isset( $_POST["email"] )  && trim( $_POST["email"] )!=="" && isset( $_POST["user"] )  && trim( $_POST["user"] )!=="" && isset( $_POST["pass"] )  && trim( $_POST["pass"] )!==""   ){
            registrar($_POST["email"],$_POST["user"],$_POST["pass"]);
        }
        else{
            alert("Por favor, ingresa todos los campos con la informaci&oacute;n solicitada");
        }
    }
    */
?>