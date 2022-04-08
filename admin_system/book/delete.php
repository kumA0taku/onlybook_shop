
<?php

if(isset($_GET['book_id']) && !empty($_GET['book_id'])){
    $id = $_GET["book_id"];
    $sql="DELETE FROM bank WHERE book_id ='$id'";
   }   //print_r($_POST);
   if(mysqli_query($conn,$sql)){
       $alert = '<script type="text/javascript">';
       $alert .= 'alert("ลบข้อมูลสำเร็จ");';
       $alert .= 'windows.location.href = "?page=book";';
       $alert .= '</script>';
       echo $alert;
       exit();

   }
   else{
       echo "Error: " .$sql."<br>" . mysqli_error($conn);
   }

   mysqli_close($conn);
?>