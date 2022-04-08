<?php
include('connect_db.php');

if ($_POST) {
    $bank_name = $_POST['bank_name'];
    $bank_no = $_POST['bank_no'];
    $id = $_POST['id'];





    $sql = "UPDATE bank SET bank_name = '$bank_name', bank_no = '$bank_no' WHERE bank_id = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Success!!";
        // $url = "?page=bank";
        // header('Location: ' . $url);
    } else {
        echo "Fail: " . $sql . "<br>" . mysqli_error($conn);
    }
    // mysqli_close($conn);
    $conn->close();
}