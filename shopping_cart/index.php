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
         <div class="txt-heading">shopping-cart</div>
         <a href="index.php?action=empty">Empty Cart</a>

         <table class= "tbl-cart" cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th style="text-align: left;">Name</th>
                    <th style="text-align: left;">Code</th>
                    <th style="text-align: right;" width="5%">Quantily</th>
                    <th style="text-align: right;" width="10%">Unit Price</th>
                    <th style="text-align: right;" width="10%">Price</th>
                    <th style="text-align: center;" width="5%">Remove</th>
                </tr>
                <tr>
                    <td> <img src="image/thumbnail.jpg" class="cart-item-image"  alt=""></td>
                    <td>มาแก้นำ รอโค๊ต</td>
                    <td style="text-align: right;">1</td>    
                    <td style="text-align: right;">$199</td>
                    <td style="text-align: right;">$199</td>
                    <td style="text-align: center;"><a href="#" class="btnRemoveAction"><img src="image/icon-Remove.jpg" alt="Remove Item"></a></td>                
                </tr>
                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right">1</td>
                    <td align="right" colspan="2">$199.00</td>
                    <td></td>
                </tr>
            </tbody>
         </table>
     </div>
    <div id="product-grid">
        <div class="product-item">
            <form action="index.php?action=add&code">
                <div class="product-image">
                    <img src="image/fairy tail.jpg" alt="images">
                </div>
                <div class="product-title-footer">
                    <div class="product-title">fairy tail</div>
                    <div class="product-price">$199</div>
                    <div class="cart-action">
                        <input type="text" class="product-quantily" name="quantily" value="1" size="2">
                        <input type="submit" value="Add to cart" class="btnAddAction">

                    </div>


                </div>
            </form>
        </div>
    </div>

</body>
</html>