<?php

    session_start();
    require_once('dbcontrller.php');
    $db_handle = new DBController();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shopping cart</title>

    <link rel="stylesheet" href="style.css">


</head>
<body>
     <div id="shopping-cart">
         <div class="txt-heading">shopping cart</div>
         <a href="index.php?action=empty" id="btnEmpty">Empty Cart</a>

         <table class= "tbl-cart" cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th style="text-align: left;">Name</th>
                    <th style="text-align: left;">Code</th>
                    <th style="text-align: left;" width="20%">Quantily</th>
                    <th style="text-align: left;" width="15%" >Unit Price</th>
                    <th style="text-align: left;" width="10%">Price</th>
                    <th style="text-align: center;" width="5%">Remove</th>
                </tr>
                <tr>
                    <td> <img src="image/thumbnail.jpg" class="cart-item-image"  alt="" ></td>
                    <td>นารูโตะ ตอนที่1</td>
                    <td style="text-align: left;">1</td>    
                    <td style="text-align: left;">$199</td>
                    <td style="text-align: left;">$199</td>
                    <td style="text-align: center;"><a href="#" class="btnRemoveAction"><img src="image/delete-vector-icon.jpg" class="btnRemoveAction" alt="Remove Item" id="preview" width="155" height="250"></a></td>                
                </tr>
                <tr>
                    <td colspan="2" align="center">Total:</td>
                    <td align="left">1</td>
                    <td align="left" colspan="2">$199.00</td>
                    <td></td>
                </tr>
            </tbody>
         </table>
     </div>
    <div id="product-grid">
        <div class="txt-heading">Product</div>

    <?php

    $product_array = $db_handle->runQuery("SELECT * FROM tbl_product order BY id ASC");
        if(!empty($product_array)){
            foreach($product_array as $key => $value){

            
    
    
    ?>

        <div class="product-item">
            <form action="index.php?action=add&code">
                <div class="product-image">
                    <img src="<?php echo $product_array[$key]["image"]?>" alt="images" id="preview" width="250" height="155">
                </div>
                <div class="product-title-footer">
                    <div class="product-title"><?php echo $product_array[$key]["name"]?></div>
                    <div class="product-price"><?php echo "$ " . $product_array[$key]["price"]?></div>
                    <div class="cart-action">
                        <input type="text" class="product-quantily" name="quantily" value="1" size="2">
                        <input type="submit" value="Add to cart" class="btnAddAction">

                    </div>


                </div>
            </form>
        </div>
        <?php
        
            }
        }
        
        
        ?>
    </div>


</body>
</html>