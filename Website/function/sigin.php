<?php
    function registrar($mail,$user,$pass){


        $verificar = "SELECT id FROM users WHERE email = '$mail'";

        $res = query( $verificar );

        if( $res !== null ){
            return false;
        }


        $registro = "INSERT INTO `users` ( `email`, `username`, `password`) VALUES ('$mail', '$user', MD5('$pass') )";
    
        $res_re = mysqli_query(conexion(),$registro);



        if( $res_re === false ){
            return false;
        }else{
            return true;
        }
        
    }
    if(isset($_GET["registro_usuario"])){
            if( isset( $_POST["email"] )  && trim( $_POST["email"] )!=="" && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && isset( $_POST["user"] )  && trim( $_POST["user"] )!=="" && isset( $_POST["pass"] )  && trim( $_POST["pass"] )!==""   ){
                $result = registrar($_POST["email"],$_POST["user"],$_POST["pass"]);
                if( $result ){
                    header("Location:?registro_completo");
                }else{
                    header("Location:?error_registro");
                }
            }
            else{
                HandleError("Por favor, ingresa todos los campos con la informaci&oacute;n solicitada");
            }
        }
?>