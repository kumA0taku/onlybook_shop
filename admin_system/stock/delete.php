<?php 
require('../connect_db.php');
if(isset($_GET['stock_id']) && !empty($_GET['stock_id'])){
    $id=$_POST["stock_id"];
    $sql = "DELETE FROM stock WHERE stock_id ='$id'";
    if(mysqli_query($conn,$sql)){
        $alert = '<script type="text/javascript">';
        $alert .= 'alert("ลบข้อมูลสำเร็จ");';
        $alert .= 'windows.location.href = "?page=stock";';
        $alert .= '</script>';
    }else{
        echo "Error: ".$sql. "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
}





?>
