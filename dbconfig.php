<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vannai";
    $port =  3306;

    $con = mysqli_connect($server,$username,$password,$dbname,$port);

    if(!$con)
    {
        echo"Not Connected". mysqli_connect_error();
    }else{
        echo "";
    }
?>