<?php
require("../connect_db.php");
$sql = " SELECT * FROM stock"; //query DB
$rs = mysqli_query($conn, $sql);
?>
<?php include('include/script.php') ?>
<h1 class="app-page-title">Stock</h1>
<hr class="mb-4">
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
                            <th scope="col">Quantity</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rs as $data) : ?>
                            <tr>
                                <td><?= $data['stock_id'] ?></td>
                                <td><?= $data['book_id'] ?></td>
                                <td><?= $data['qty'] ?></td>
                                <td>
                                    <a href="?page=<?=$_GET['page']?>&function=update&id=<?=$data['stock_id']?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <!--//app-card-body-->

        </div>
        <!--//app-card-->
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabelAll').DataTable();
    });
    // $(document).on('click','.delete', function(){
    //     var id =$(this).attr('stock_id');
    //     Dialogify.confirm("<h3 class='textdanger'></b>Are you sure you want to remove this data?</b></h3>",{
    //         ok:function(){
    //             $.ajax({
    //                 url:"delete.php",
    //                 method:"POST",
    //                 data:{id:id},
    //                 success:function(date)
    //             })
    //         },
    //         cancel:function(){
    //             this.close();

    //         }
    //     })
    // });
</script>

