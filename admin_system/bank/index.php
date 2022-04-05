<?php
require("connect_db.php");
$sql = " SELECT * FROM payment"; //query DB
$rs = mysqli_query($conn, $sql);
?>
<h1 class="app-page-title">Bank</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">
                <table class="table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Bank No</th>
                                <th scope="col">Bank Name</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rs as $data): ?>
                                <tr>
                                    <td><?=$data['bank_no']?></td>
                                    <td><?=$data['bank_name']?></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </table>
            </div>
        </div>
    </div>
</div>
<?php mysqli_close($conn); ?>