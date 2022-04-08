<?php
if (isset($_GET['bank_id']) && !empty($_GET['bank_id'])) {
    // $bank_name = $_POST['bank_name'];
    // $bank_no = $_POST['bank_no'];
    $id = $_GET['id'];
    $sql = "DELETE FROM bank WHERE bank_id = '$id'";
    
    if (mysqli_query($conn, $sql)) {
        $alert = '<script type="text/javascript" >';
        $alert .= 'alert("Success!!")';
        $alert .= 'window.location.href = "?page=bank";';
        $alert .= '</script>';
        echo $alert;
        exit();
    } else {
        echo "Fail: " . $sql . "<br>" . mysqli_error($conn);
    }
    // mysqli_close($conn);
    $conn->close();
}
?>