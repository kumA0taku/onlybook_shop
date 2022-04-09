
<?php
 include('../connect_db.php');
  include('include/script.php');
  $request = $_REQUEST;
  $id =$request['stock_id'];
  $mysqli = new mysqli($conn);
  if($mysqli->connect_errno){
      echo "Failed to connect to MYSQL: ".$mysqli->connect_error;
      exit();
  }
  $sql = "DELETE FROM stock WHERE id='".$id."'";
  if($mysqli->query($sql)){
      echo "stock has been successfully delete.";
  }else{
      echo "Error: ". $sql."<br>".$mysqli->error;
  }
  $mysqli->close();
// if(isset($_GET['stock_id']) && !empty($_GET['stock_id'])){
//     $id = $_GET["stock_id"];
//     $sql="DELETE FROM bank WHERE id ='$id'";
//    }   //print_r($_POST);
//    if(mysqli_query($conn,$sql)){
//     $alert = '<script type="text/javascript">';
//     $alert .= 'alert("ลบข้อมูลสำเร็จ");';
//     $alert .= 'windows.location.href = "?page=book";';
//     $alert .= '</script>';
//     echo $alert;
//     exit();

// }
// else{
//     echo "Error: " .$sql."<br>" . mysqli_error($conn);
// }

//    mysqli_close($conn);
?>