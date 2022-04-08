<?php
require("../connect_db.php");
$sql = " SELECT * FROM bank"; //query DB
$rs = mysqli_query($conn, $sql);
?>
<?php include('include/script.php') ?>
<h1 class="app-page-title">Order Status</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <a class="btn btn-success <?php echo isset($_GET['page']) && $_GET['page'] == 'add' ? 'active' : ''?>" href="?page=add">
                            Add Bank
                        </a>
                    </div>
                </div>
                <table class="table" id="tabelAll">
                    <thead>
                        <tr>
                            <th scope="col">Bank No</th>
                            <th scope="col">Bank Name</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rs as $data) : ?>
                            <tr>
                                <td><?= $data['bank_no'] ?></td>
                                <td><?= $data['bank_name'] ?></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
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