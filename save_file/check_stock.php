<?php
require("connect_db.php");
$id = $_POST['id'];
$qty = $_POST['qty'];

$sql = "SELECT qty FROM products WHERE id ='" . $id . "'";
$data = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($data);
$qty2 = (int)$product['qty'];

if ((int)$qty < (int)$qty2) {
    $realQty = (int)$qty2 - (int)$qty;
    $sql = "UPDATE products SET qty ='$realQty' WHERE id ='" . $id . "'";
    $data = mysqli_query($conn, $sql);
    mysqli_query($conn, $sql);
}

header("location: ProductList.php");