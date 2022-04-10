<?php
require("connect_db.php");
$sql = " SELECT * FROM book"; //query DB
$rs = mysqli_query($conn, $sql);
?>
<?php include('include/script.php') ?>
<h1 class="app-page-title">Book list</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <a href="?page=<?= $_GET['page'] ?>&function=add" class="btn btn-success ">
                            Cart
                        </a>
                    </div>
                </div>
                <table class="table" id="tabelAll">
                    <thead>
                        <tr>
                            <th scope="col">Picture</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rs as $data) : ?>
                            <tr>
                                <td><img src="image/<?= $data['book_img'] ?>" width="100" height="100"></td>
                                <td><?= $data['book_name'] ?></td>
                                <td><?= $data['price'] ?></td>
                                <td> 
                                    <a href="?page=<?=$_GET['page']?>&function=add_to_cart&id=<?=$data['book_id']?>" class="btn btn-sm btn-success">Add to Cart</a>
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