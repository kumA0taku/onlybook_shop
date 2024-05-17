<?php 

//my PC
$user="root";
$pass="";
$db="onlybook";
$host="localhost";

// $user="webuser";
// $pass="P@ssword1";
// $db="webdata";
// $host="localhost";

$conn=mysqli_connect($host,$user,$pass,$db);


    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>