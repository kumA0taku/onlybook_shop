<!DOCTYPE html>
<html lang="en">
<?php include('include/head.php') ?>
<?php include('include/script.php') ?>
<!-- script -->

<body class="app">
    <!--//app-header-->
    <?php include('include/header.php') ?>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <?php
                if(!isset($_GET['page']) && empty($_GET['page']))
                {
                    include('/shopping_cart/home.php'); //dont touch
                }
                
                elseif(isset($_GET['page']) && $_GET['page'] == 'home')
                {
                    include('shopping_cart/home.php'); //bank
                }
                elseif(isset($_GET['page']) && $_GET['page'] == 'book')
                {
                    include('shopping_cart/home.php'); //go to book <<<
                }
                elseif(isset($_GET['page']) && $_GET['page'] == 'category')
                {
                    include('category/index.php'); //category
                }
                elseif(isset($_GET['page']) && $_GET['page'] == 'orders_status')
                {
                    include('order/index.php'); //order
                }
                ?>
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
        <?php include('include/footer.php') ?>
        <!--//app-footer-->
    </div>
    <!--//app-wrapper-->
</body>

</html>