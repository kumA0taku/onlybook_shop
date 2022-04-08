<?php 
require('../connect_db.php');
$id=$_POST["stock_id"];

$sql="DELETE FROM stock WHERE stock = $id";

$result=mysqli_query($conn,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}
?>
