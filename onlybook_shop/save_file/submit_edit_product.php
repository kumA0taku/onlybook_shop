<?php
require("connect_db.php");
$id=$_POST['id'];
$name=$_POST['p_name'];
$_price=$_POST['price'];

$sql = "UPDATE product SET p_name='$name', price= '$_price' WHERE p_id='$id'";
mysqli_query($conn, $sql);

header( "location: home.php" );
exit(0);
?>