<?php

    session_start();
    require_once('dbcontrller.php');
    $db_handle = new DBController();

?>

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
        <div class="txt-heading">Product</div>

    <?php

    $product_array = $db_handle->runQuery("SELECT * FROM tbl_product order BY id ASC");
        if(!empty($product_array)){
            foreach($product_array as $key => $value){

            
    
    
    ?>

        <div class="product-item">
            <form action="index.php?action=add&code">
                <div class="product-image">
                    <img src="img/ <?php echo $product_array[$key]["image"]?>" alt="images" id="preview" width="250" height="155">
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