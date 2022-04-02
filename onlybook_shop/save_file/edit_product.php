<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
    <title>CheckCheck Stock</title>
</head>


<table border="1" >
<h1>CheckCheck</h1><br>
<tr><a href="home.php">Home</a></tr></h1><br>
<h2>Edit Product</h2>
</table><br>
<?php
require("connect_db.php");
$sql = "SELECT * FROM product WHERE p_id='".$_GET["ID"]."'";
$rs = mysqli_query($conn, $sql);
$student = mysqli_fetch_assoc($rs);
// $sql = "SELECT dept_name FROM department";
$depts = mysqli_query($conn, $sql);
?>

<form action="submit_edit_product.php" method="post">
    <input type="hidden" name="id" value="<?php print($_GET["ID"]);?>">
<?php
// print("Student ID:".$student['p_id']."<br>");
print("Product Name: <input type=text name=p_name value='".$student['p_name']."'><br>");
print("Product Price: <input type=text name=price value='".$student['price']."'><br>");
// print("Product Quantity: <input type=text name=qty value='".$student['qty']."'><br>");
// print("Department:");
?><br>
<input type="submit">
</form>