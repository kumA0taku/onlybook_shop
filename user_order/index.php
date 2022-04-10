<?php
require("connect_db.php");
$sql = "SELECT * FROM order_book 
INNER JOIN user ON order_book.user_id = user.id;"; //query DB
$rs = mysqli_query($conn, $sql);
?>
<?php include('include/script.php') ?>
<h1 class="app-page-title">Check Order Status</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">
                <table class="table" id="tabelAll">
                    <thead>
                        <tr>
                            <th scope="col">User Name</th>
                            <th scope="col">Delivery Status</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rs as $data) : ?>
                            <tr>
                                <td><?= $data['username'] ?></td>
                                <td><?= $data['delivery_status'] ?></td>
                                <td><?= $data['payment_status'] ?></td>
                                <td>
                                    <a href="?page=<?=$_GET['page']?>&function=check_order&id=<?=$data['order_id']?>" class="btn btn-sm btn-info">ดูเลขบัญชีร้านค้า</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
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