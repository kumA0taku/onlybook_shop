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
<h2>Add Stock</h2>
</table><br>



<?php
require("connect_db.php");
$sql = "SELECT p_id FROM product";
$pro_id = mysqli_query($conn, $sql);
?>
<form action="submit_add_stock.php" method="post">
<?php
print("Stock ID: <input type=text name=id><br>");
print("Product ID: ");
// print("Student Name:<input type=text name=name><br>");
?>
<select name="p_id">
    <?php
        while($p_id=mysqli_fetch_assoc($pro_id)){
    ?>
        <option value="<?php print($p_id['p_id']);?>"><?php print($p_id['p_id']);?>
        </option>
    <?php
        }
    ?>
</select>
<br>
<?php
print("Quantity: <input type=number name=name ><br>");
?>
<br>

<input type="submit">
</form>