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
<h2>Edit Stock</h2>
</table><br>
<?php
require("connect_db.php");
$sql = "SELECT * FROM product INNER JOIN stock ON product.p_id=stock.p_id";
$rs = mysqli_query($conn, $sql);
$student = mysqli_fetch_assoc($rs);
$depts = mysqli_query($conn, $sql);

?>

<form action="submit_edit_stock.php" method="post">
    <input type="hidden" name="id" value="<?php print($_GET["ID"]);?>">
<?php
print("Product Price: <input type=text name=price value='".$student['price']."'><br>");
print("Product Quantity: <input type=text name=qty value='".$student['qty']."'><br>");
?><br>
<input type="submit">
</form>