<?php
require("connect_db.php");
$id=$_POST['id'];
$name=$_POST['p_name'];
$_price=$_POST['price'];
$_qty=$_POST['qty'];

$sql = "UPDATE product SET price='$_price'WHERE p_id='$id'";
mysqli_query($conn, $sql);
$sql2 = "UPDATE stock SET qty= $_qty WHERE p_id='$id'";
mysqli_query($conn, $sql2);

header( "location: stock_screen.php" );
exit(0);
?>