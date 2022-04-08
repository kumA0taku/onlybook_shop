<!DOCTYPE html>
<html lang="en">
<?php include('include/head.php') ?>

<!-- script -->
<?php include('include/script.php') ?>

<body class="app">
    <!--//app-header-->
    <?php include('include/header.php') ?>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <?php
                if (!isset($_GET['page']) && empty($_GET['page'])) {
                    include('category/index.php'); //temp
                }elseif (isset($_GET['page']) && $_GET['page'] == 'stock') { //stock
                    if(isset($_GET['function']) && $_GET['function'] == 'add_stock')
                    {
                        include('stock/insert.php');
                    }
                    elseif(isset($_GET['function']) && $_GET['function'] == 'update')
                    {
                        include('stock/edit.php');
                    }
                    elseif(isset($_GET['function']) && $_GET['function'] == 'delete')
                    {
                        include('stock/delete.php');
                    }
                    else{
                        include('stock/index.php'); 
                    }
                    
                    }
                    elseif (isset($_GET['page']) && $_GET['page'] == 'book') {
                    if(isset($_GET['function']) && $_GET['function'] == 'add')
                    {
                        include('book/insert.php');
                    }
                    elseif(isset($_GET['function']) && $_GET['function'] == 'update')
                    {
                        include('book/edit.php');
                    }
                    elseif(isset($_GET['function']) && $_GET['function'] == 'delete')
                    {
                        include('book/delete.php');
                    }
                    else{
                        include('book/index.php'); 
                    }
                } elseif (isset($_GET['page']) && $_GET['page'] == 'bank') { //bank
                    if(isset($_GET['function']) && $_GET['function'] == 'add')
                    {
                        include('bank/insert.php');
                    }
                    elseif(isset($_GET['function']) && $_GET['function'] == 'update')
                    {
                        include('bank/edit.php');
                    }
                    elseif(isset($_GET['function']) && $_GET['function'] == 'delete')
                    {
                        include('bank/delete.php');
                    }
                    else{
                        include('bank/index.php'); 
                    }
                } elseif (isset($_GET['page']) && $_GET['page'] == 'category') {
                    include('category/index.php'); //category
                } elseif (isset($_GET['page']) && $_GET['page'] == 'orders_status') {
                    include('order/index.php'); //order
                } elseif (isset($_GET['page']) && $_GET['page'] == 'test_page') {
                    include('bank/insert.php'); //test page
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