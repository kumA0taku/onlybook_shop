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
$sql = " SELECT * FROM order_book
join user on order_book.user_id = user.user_id"; //query DB
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

<table border="1" >
    <tr style="font-size:180%;"><td>User ID</td><td>User Name</td><td>Delivery Status</td><td>Payment Status</td><td>Operation</td></tr>
<?php
while($row = mysqli_fetch_assoc($rs)){
    print("<tr style = 'font-size:150%;'>\n");
    print("<td >".$row["user_id"]."</td>");
    print("<td >".$row["user_name"]."</td>");
    print("<td >".$row["delivery_status"]."</td>");
    print("<td >".$row["payment_status"]."</td>");
    print("<td ><a href=edit_product.php?ID=".$row["payment_id"].">Edit</a> </td>"); //edit button
    print("</tr>\n");
}
?>
</table>
<br>

</body>
</html>