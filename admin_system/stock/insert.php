<?php include('../connect_db.php');
if (isset($_POST) && !empty($_POST)) {

    // print_r($_POST);
    $stock_id = $_POST['stock_id'];
    $book_id = $_POST['book_id'];
    $Quality = $_POST['qty'];

    $sql = "INSERT INTO stock (stock_id,book_id,qty) VALUES('$stock_id', '$book_id',$Quality)";
    if (mysqli_query($conn, $sql)) {
        //echo "Success!!";
    $alert ='<script type="text/javascript>">';
    $alert .= 'alert("เพิ่มข้อมูลสำเร็จ");';
    $alert .= 'window.location.href ="?page=stock&function=add";';
    $alert .= '</script>';
    echo $alert;
    } else {
        echo "Fail: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
$sq = "SELECT book_id FROM book";
$bookID = mysqli_query($conn, $sq);
?>
<?php include('include/script.php') ?>
<div class="row justify-content-between">
    <div class="col-auto">
    <h1 class="app-page-title mb-0">Stock</h1>
    </div>
    <div class="col-auto">
    <a href="?page=<?=$_GET['page']?>" class="btn btn-success float-left">back</a>
    </div>
</div>

<hr class="mb-4">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">

                <div class="app-content pt-3 p-md-3 p-lg-4">
                    <div class="container-xl">
                        <h1 class="app-page-title" style="font-size: 120%;">Add Stock</h1>
                        <hr class="mb-4">
                        <div class="row g-4 settings-section">
                            <div class="col-12 col-md-8">
                                <div class="app-card app-card-settings shadow-sm p-4">
                                    <div class="app-card-body">
                                        
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <label class="form-label">Stock ID</label>
                                                <input type="text" class="form-control" name="stock_id" value="<?= (isset($_POST['stock_id'])
                                                                                                                    && !empty($_POST['stock_id']) ? $_POST['stock_id'] : '') ?> " autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Quality</label>
                                                <input type="text" class="form-control" name="qty" value="<?= (isset($_POST['qty'])
                                                                                                                && !empty($_POST['qty']) ? $_POST['qty'] : '') ?> " autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Book ID</label>
                                                <select name="book_id">
                                                    <?php
                                                    while ($book_msqli = mysqli_fetch_assoc($bookID)) {
                                                    ?>
                                                        <option value="<?php print($book_msqli['book_id']); ?>"><?php print($book_msqli['book_id']); ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select><br>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="submit" class="btn app-btn-primary">Add</button>
                                            <!button type="submit" class="btn app-btn-danger"></!button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--//app-card-body-->

                                </div>
                                <!--//app-card-->
                            </div>
                        </div>
                        <!--//row-->
                    </div>
                    <!--//container-fluid-->
                </div>
                <!--//app-content-->
            </div>
        </div>
    </div>

                                                                                                    
                                                                                                    

                                                                                                    
