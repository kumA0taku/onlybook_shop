<?php
require("connect_db.php");
$id=$_POST['id'];
$name=$_POST['name'];
$p_id=$_POST['p_id'];

$sql = "INSERT INTO stock(stock_id,p_id,qty) VALUES('$id','$p_id','$name')";
mysqli_query($conn, $sql);

header( "location: stock_screen.php" );
exit(0);
?>