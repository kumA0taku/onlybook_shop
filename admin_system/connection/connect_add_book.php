<?php
$connect = mysqli_connect("localhost","onlybook","123456","onlybook");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
    //echo "success";
}
?>