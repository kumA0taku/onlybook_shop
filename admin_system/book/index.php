<?php
require("../connect_db.php");
$sql = " SELECT * FROM book"; //query DB
$rs = mysqli_query($conn, $sql);
?>
<h1 class="app-page-title p-4">Book list</h1>
<hr class="mb-12">
<div class="row g-4 settings-section">

    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <a href="?page=<?= $_GET['page'] ?>&function=add" class="btn btn-success ">
                        Add book
                    </a>
                </div>
            </div>
        </div>
        <!--//app-card-body-->
        <table class="table" id="tabelAll">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rs as $data) : ?>
                    <tr>
                        <td><?= $data['book_id'] ?></td>
                        <td><?= $data['category_id'] ?></td>
                        <td><?= $data['book_name'] ?></td>
                        <td><?= $data['price'] ?></td>
                        <td><?= $data['description'] ?></td>
                        <td><img src="image/<?= $data['book_img'] ?>" width="100" height="100"></td>
                        <td>
                            <a href="?page=>?=$_GET['page']?>&function=update&id=<?= $data['book_id'] ?>" class="btn btn-sm btn-warning p-1 mb-2 ">Edit</a>
                            <a href="?page=>?=$_GET['page']?>&function=delete&id=<?= $data['book_id'] ?>" onclick="return confirm('คุณต้องการลบใชไหม')" class="btn btn-sm btn-danger p-1 mb-2">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!--//app-card-->
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tabelAll').DataTable();
    });
</script>
<?php mysqli_close($conn); ?>