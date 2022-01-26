<?php
    $dbhost= "localhost";
    $dbuser = "root";
    $dbpassword= "";
    $dbname = "blog";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    if(!$conn){
        echo "Connection Error". mysqli_connect_error();
    }
?>