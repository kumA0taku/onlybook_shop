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
    $sql = " SELECT * FROM book 
    JOIN category ON book.category_id = category.category_id "; //query DB
    $rs = mysqli_query($conn, $sql);
    ?>

<body>
    
<table border="2" >
<h1 style="text-align: center; font-size:300%; text-shadow: pink 5px 5px;">Onlybook Shop</h1>
<h2 style="background-color: DodgerBlue ; text-align: left; font-size:200%; text-shadow: pink 3px 3px;">Home</h2>
<h4 style="background-color: LightGray ; text-align: center; font-size:100%;">Comedy comics</h4>

<div class="button" align="end" >
<button style="font-size:250%; border-radius: 10px; background-color: blue;" onclick="document.location='/onlybook_shop/shopping_cart/cart.php'">Cart</button>
</div>

</table><br>

<table border="1" >

<?php while($row= mysqli_fetch_assoc($rs)){
    print("<tr><td><img src= 'img/".$row["book_img"]." 'height= '200' ' width = '250'></td></tr>");
    print("<tr><td>".$row["book_name"]."</td></tr>");
    print("<tr><td><a href= cart.php? ID=".$row["book_id"]."> Add to cart </a></td></tr>");
    
} ?>
</table>
<br>
 ขอบคุณที่มาใช้บริการเว็ปเรานะคะ
</body>
</html>