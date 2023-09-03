<?php
$conn = mysqli_connect("localhost","root","YOUR_ROOT_PASSWORD","onlybook");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
    //echo "success";
}
?>