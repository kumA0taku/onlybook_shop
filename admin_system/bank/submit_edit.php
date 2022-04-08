<?php
// include('connect_db.php');

// if ($_POST) {
//     $bank_name = $_POST['bank_name'];
//     $bank_no = $_POST['bank_no'];
//     $id = $_POST['id'];





//     $sql = "UPDATE bank SET bank_name = '$bank_name', bank_no = '$bank_no' WHERE bank_id = '$id'";
//     if (mysqli_query($conn, $sql)) {
//         echo "Success!!";
//         // $url = "?page=bank";
//         // header('Location: ' . $url);
//     } else {
//         echo "Fail: " . $sql . "<br>" . mysqli_error($conn);
//     }
//     // mysqli_close($conn);
//     $conn->close();
// }

// if(isset($_GET['bank_id']) && !empty($_GET['bank_id'])){
// $bank_id = $_GET['bank_id'];
// // $bank_name=$_GET['bank_name'];
// // $bank_no=$_GET['bank_no'];
// $sql = "SELECT * FROM bank WHERE bank_id = '$bank_id'";
// $query = mysqli_query($conn, $sql);
// $result = mysqli_fetch_assoc($query);


// $sql = "UPDATE bank SET bank_name = '$bank_name', bank_no = '$bank_no' WHERE bank_id = '$bank_id'";
// if(mysqli_query($conn, $sql)){
// echo "Success!!";
// }else{
// echo "Fail: ".$sql."<br>". mysqli_error($conn);
// }
// // mysqli_close($conn);
// }
// 
