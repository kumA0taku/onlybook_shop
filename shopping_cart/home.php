<!DOCTYPE html>
<html lang="en">
    
<?php include('../include/head.php') ?>
<?php include('../include/script.php') ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>

    <link rel="stylesheet" href="style.css">


</head>
<body>
    
<h1 class="app-page-title">OnlyBook Shop</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class = "col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">
            </div>
        </div>
    </div>
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