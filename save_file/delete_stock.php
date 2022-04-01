<?php
require("connect_db.php");
$id=$_GET['ID'];

$sql = "DELETE FROM stock WHERE stock_id='$id'";
mysqli_query($conn, $sql);

header( "location: stock_screen.php" );
exit(0);
?>