<?php
require("../connect_db.php");
$sql = " SELECT * FROM stock"; //query DB
$rs = mysqli_query($conn, $sql);


?>
<?php include('include/script.php') ?>
<div class="row justify-content-between">
    <div class="col-auto">
    <h1 class="app-page-title mb-4">Stock</h1>
     </div>
     <div class="col-auto">
     
     </div>
</div >

<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <a href="?page=<?=$_GET['page']?>&function=add_stock" class="btn btn-success ">
                            Add Stock
                        </a>
                    </div>
                </div>
                <table class="table" id="tabelAll">
                    <thead>
                        <tr>
                            <th scope="col">Stock ID</th>
                            <th scope="col">Book ID</th>
                            <th scope="col">Quality</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rs as $data) : ?>
                            <tr>
                                <td class="align-middle"><?= $data['stock_id'] ?></td>
                                <td class="align-middle"><?= $data['book_id'] ?></td>
                                <td class="align-middle"><?= $data['qty'] ?></td>
                                <td>
                                    <a href="?page=<?=$_GET['page']?>&function=update&id=<?=$data['book_id']?>"  class="btn btn-sm btn-warning">Edit</a>
                                    <a href="?page=<?=$_GET['page']?>&function=delete&id=<?=$data['book_id']?>" onclick="return confirm('ต้องการลบใช่ไม่ : <?=$data['stock_id']?>')" class="btn btn-sm btn-danger">delete</a>
                                    
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

