<?php
    function conexion(){
        $db_host = "localhost";
        $db_name = "base_expo";
        $db_user = "root";
        $db_pass = "";
    
        $connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        return $connect;
    }

    function query($sql){
        $res = mysqli_query(conexion(),$sql);
        return mysqli_fetch_array( $res );
    }
?>