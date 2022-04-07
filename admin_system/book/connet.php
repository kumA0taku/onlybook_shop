<?php
    //my PC
    $user="onlybook";
    $pass="123456";
    $db="onlybook";
    $host="localhost";

    // $user="webuser";
    // $pass="P@ssword1";
    // $db="webdata";
    // $host="localhost";

    $conn=mysqli_connect($host,$user,$pass,$db);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    echo "DB Connected";
?>