
<?php include("connection/connect_add_book.php") ?>
<!DOCTYPE html>
<html lang="en">
<?php include('include/head.php') ?>
<?php include("include/script.php") ?>
<?php include('include/header.php') ?>
<!?php include("dashboard/index.php") ?>

<body class="app">
    <!--//app-header-->
    <div class="app-wrapper">
        <div class="app-content pt-1 p-md-3 p-lg-12">
        <div class="container-xl">
        <?php if(!isset($_GET['page']) && empty($_GET['page'])){
            include("dashboard/index.php");
        } elseif(isset($_GET['page']) && $_GET['page'] == 'book'){
            if(isset($_GET['function']) && $_GET['function']=="add"){
                include("admin/admin/insert.php"); 
            }
            elseif(isset($_GET['function']) && $_GET['function']=="update"){
                include("admin/admin/edit.php"); 
            }
            else{
                include("book/index.php");
            }
            
            
        }
        
        ?>
            <!--//container-fluid-->
        </div>
        </div>
        <!--//app-content-->
        <!--<?php include('include/footer.php') ?>-->
        <!--//app-footer -->
    </div>
    <!--//app-wrapper-->
    <script type="text/javascript">
    $(document).ready( function () {
    $('#mytable').DataTable({
        language : {
    "decimal":        "",
    "emptyTable":     "No data available in table",
    "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
    "infoEmpty":      "Showing 0 to 0 of 0 entries",
    "infoFiltered":   "(filtered from _MAX_ total entries)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Show _MENU_ entries",
    "loadingRecords": "Loading...",
    "processing":     "Processing...",
    "search":         "Search:",
    "zeroRecords":    "No matching records found",
    "paginate": {
        "first":      "First",
        "last":       "Last",
        "next":       "Next",
        "previous":   "Previous"
    },
    "aria": {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
    }
}
    });
} );
    </script>
    <?php 
    mysqli_close($connect);
    ?>
</body>
</html>