<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
    <title>CheckCheck Stock</title>
</head>

<?php
require("connect_db.php");
$sql = "SELECT * FROM product 
INNER JOIN stock ON product.p_id=stock.p_id";
$rs = mysqli_query($conn, $sql);
?>

<body>
    
<table border="1" >
<h1>CheckCheck</h1><br><br>
<tr><a href="home.php">Home</a></tr></h1>
<tr><a href="stock_screen.php">  Stock</a></tr></h1>
</table><br>

<h2>Stock</h2>
<td><a href="add_stock.php">Add Stock</a></td></h1>
<table border="1" >
    <tr><td>Picture</td><td>Product ID</td><td>Product Name</td><td>Price</td><td>Quantity</td><td>Operation</td></tr>
<?php
while($row = mysqli_fetch_assoc($rs)){
    print("<td><img src='img/" . $row["picture"] . " ' width='100'></td>");
    print("<td>".$row["p_id"]."</td>");
    print("<td>".$row["p_name"]."</td>");
    print("<td>".$row["price"]."</td>");
    print("<td>".$row["qty"]."</td>");
    print("<td><a href=edit_stock.php?ID=".$row["p_id"].">Edit</a> <a href=delete_stock.php?ID=".$row["stock_id"]." onclick=\"return confirm('Are you sure?')\">Delete</a></td>"); //edit button
    print("</tr>\n");
}
?>
</table>
<br>

</body>
</html>