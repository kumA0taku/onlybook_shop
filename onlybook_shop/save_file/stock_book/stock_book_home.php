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
$sql = " SELECT * FROM stock 
JOIN book ON book.book_id = stock.book_id
JOIN category ON book.category_id = category.category_id "; //query DB
$rs = mysqli_query($conn, $sql);
?>

<body>
    
<table border="1" >
<h1 style="text-align: center; font-size:300%;">Onlybook Shop</h1>
<h2 style="background-color:tomato; text-align: end; font-size:200%; text-shadow: white 2px 3px;">Admin Management</h2><br>
<button style="font-size:150%;" onclick="document.location='/onlybook_shop/admin_system/stock_book/stock_book_home.php'">Stock</button>
<button style="font-size:150%;" onclick="document.location='/onlybook_shop/admin_system/bank/bank.php'">Bank</button>
<button style="font-size:150%;" onclick="document.location='/onlybook_shop/admin_system/order/order_status.php'">Order Status</button>
</table><br>

<table>
<button style="font-size:100%;" onclick="document.location='add_stock.php'">Add Stock</button>
<button style="font-size:100%;" onclick="document.location='/onlybook_shop/admin_system/stock_book/stock_book_home.php'">Book</button>
<button style="font-size:100%;" onclick="document.location='bank.php'">Category</button>
</table><br>

<table border="1" >
    <tr style="font-size:180%;"><td>Book Name</td><td>Category</td><td>QTY</td><td>Price</td><td>Operation</td></tr>
<?php
while($row = mysqli_fetch_assoc($rs)){
    print("<tr style = 'font-size:150%;'>\n");
    print("<td >".$row["book_name"]."</td>");
    print("<td >".$row["category_name"]."</td>");
    print("<td >".$row["qty"]."</td>");
    print("<td >".$row["price"]."</td>");
    print("<td ><a href=edit_product.php?ID=".$row["stock_id"].">Edit</a> </td>"); //edit button
    print("</tr>\n");
}
?>
</table>
<br>

</body>
</html>