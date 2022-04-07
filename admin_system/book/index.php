<?php
require("../connect_db.php");
$sql = "SELECT * FROM book";
$query = mysqli_query($conn,$sql);
?>

<?php include('include/script.php') ?>
<h1 class="app-page-title">Books</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class = "col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">
				<?php include("admin/admin/index.php")?>
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
