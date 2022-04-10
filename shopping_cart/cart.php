<?php
require("connect_db.php");
$sql = " SELECT * FROM pre_cart 
INNER JOIN cart ON pre_cart.pre_cart_id = cart.pre_cart_id;
INNER JOIN book ON book.book_id = pre_cart.book_id;"; //query DB
$rs = mysqli_query($conn, $sql);
?>
<?php include('include/script.php') ?>
<h1 class="app-page-title">Add Cart</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">
                <table class="table" id="tabelAll">
                    <thead>
                        
                        <tr>
                            <th scope="col">Book name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabelAll').DataTable();
    });
</script>

<?php mysqli_close($conn); ?>