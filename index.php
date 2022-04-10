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
                if (!isset($_GET['page']) && empty($_GET['page'])) {
                    include('shopping_cart/home.php'); //dont touch
                } elseif (isset($_GET['page']) && $_GET['page'] == 'book') { //go to book <<<
                    if (isset($_GET['function']) && $_GET['function'] == 'add_to_cart') {
                        include('shopping_cart/cart.php');
                    } else {
                        include('shopping_cart/home.php'); 
                    }
                } elseif (isset($_GET['page']) && $_GET['page'] == 'check_order_status') {
                    if (isset($_GET['function']) && $_GET['function'] == 'check_order') {
                        include('user_order/check_order.php');
                    } else {
                        include('user_order/index.php'); //go to check_order_status <<<
                    }
                }elseif (isset($_GET['page']) && $_GET['page'] == 'logout') {
                    include('login/logout.php'); //go to check_order_status <<<
                }
                ?>
            </div>
            <!--//container-fluid -->
        </div>
        <!--//app-content-->
        <? //php include('include/footer.php') 
        ?>
        <!--//app-footer-->
    </div>
    <!--//app-wrapper-->
</body>

</html>