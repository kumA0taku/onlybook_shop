<h1 class="app-page-title">Delete</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class = "col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">
            <?php
if(isset($_GET['bank_no']) && !empty($_GET['bank_no'])){
    $id = $_GET["bank_no"];
    $sql="DELETE FROM bank WHERE bank_no ='$id'";
   }   //print_r($_POST);
?>
            </div>
        </div>
    </div>
</div>
