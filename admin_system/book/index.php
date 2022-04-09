<?php
require("../connect_db.php");
$sql = "SELECT * FROM book";
$query = mysqli_query($conn, $sql);
?>
<div class="row justify-content-between">
    <div class="col-auto">
    <h1 class="app-page-title p-4 mb-0 mt-0">Book list</h1> 
    </div>
</div class="col-auto>


<hr class="mb-12">
<div class="row g-4 settings-section">

    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto ">
                    <a href="?page=<?= $_GET['page'] ?>&function=add" class="btn btn-success ">
                        Add book
                    </a>
                </div>
            </div>
            <table class="table mb-4" id="tabelAll">
                <thead class="text-center">
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
                <tbody class="text-center">
                
                    <?php foreach ($query as $data); ?>
                        <tr>
                        <td class="align-middle"><?= $data['book_id'] ?></td>
                        <td class="align-middle"><?= $data['category_id'] ?></td>
                        <td class="align-middle"><?= $data['book_name'] ?></td>
                        <td class="align-middle"><?= $data['price'] ?></td>
                        <td class="align-middle"><?= $data['description'] ?></td>
                        <td class="align-middle"><img src="upload/admin/<?= $data['book_img'] ?>" width="100" height="100" class="rounded"></td>
                            <td>
                            <a href="?page=>?=$_GET['page']?>&function=update&id=<?= $data['book_id']?>" class="btn btn-sm btn-warning p-1 mb-2 ">Edit</a>
                            <a href="?page=>?=$_GET['page']?>&function=delete&id=<?= $data['book_id']?>" onclick="return confirm('คุณต้องการลบใชไหม')" class="btn btn-sm btn-danger p-1 mb-2">Delete</a>
                            </td>
                        </tr>
                    
                    

                </tbody>
            </table>
        </div>
        <!--//app-card-body-->

    </div>
    <!--//app-card-->
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tabelAll').DataTable();
    });
</script>
<?php mysqli_close($conn); ?>