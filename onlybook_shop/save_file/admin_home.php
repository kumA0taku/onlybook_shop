<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
    <title>Onlybook Shop</title>
</head>

<?php
require("connect_db.php");
$sql = "SELECT * FROM product"; //query DB
$rs = mysqli_query($conn, $sql);
?>

<body>
    
<table border="1" >
<h1 style="text-align: center; font-size:300%;">Onlybook Shop</h1>
<h2 style="text-align: end; font-size:200%;">Admin Management</h2><br>
<button style="font-size:150%;" onclick="document.location='stock_book.php'">Stock</button>
<button style="font-size:150%;" onclick="document.location='stock_book.php'">Bank</button>
</table><br>

<h2>Product</h2>
<table border="1" >
    <tr><td>Picture</td><td>Product Name</td><td>Price</td><td>Operation</td></tr>
    <!-- <td><table><tr><a><img src="img/R.jfif" width=100> </a></tr></table> </td> -->
    <!-- <td></td> -->
<?php
while($row = mysqli_fetch_assoc($rs)){
    print("<td><img src='img/" . $row["picture"] . " ' width='100'></td>");
    print("<td>".$row["p_name"]."</td>");
    print("<td>".$row["price"]."</td>");
    print("<td><a href=edit_product.php?ID=".$row["p_id"].">Edit</a> </td>"); //edit button
    print("</tr>\n");
}
?>
</table>
<br>

</body>
</html>