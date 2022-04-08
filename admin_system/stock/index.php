<?php
require("../connect_db.php");
$sql = " SELECT * FROM stock"; //query DB
$query = mysqli_query($conn, $sql);
?>
<?php include('include/script.php') ?>
<h1 class="app-page-title">Add Stock</h1>
<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <a href="?page=<?=$_GET['page']?>&function=add_stock" class="btn btn-success ">
                            Add Bank
                        </a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Quantily</th>
                            <th scope="col">Price</th>
                            <th scope="col">Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($query as $data); ?>
                        <tr>
                            <td><?= $data['stock_id'] ?></td>
                            <td><?= $data['book_id'] ?></td>
                            <td><?= $data['qty'] ?></td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php  ?>
                    </tbody>
                </table>
            </div>
            <!--//app-card-body-->

        </div>
        <!--//app-card-->
    </div>
</div>
<!--//row-->

<?php mysqli_close($conn); ?>