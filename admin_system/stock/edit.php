<?php include('../connect_db.php') ?>
<?php include('include/script.php') ;
if(isset($_GET['stock_id']) && !empty($_GET['stock_id'])){
    $id =$_GET['stock_id'];
    $sql = "SELECT * FROM stock WHERE stock_id ='$id'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);
    $contacts = mysql_query("SELECT * FROM stock WHERE stock_id ='$id'")
} ?>
<h1 class="app-page-title">Stock</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">

                <div class="app-content pt-3 p-md-3 p-lg-4">
                    <div class="container-xl">
                        <h1 class="app-page-title" style="font-size: 120%;">Edit Stock</h1>
                        <hr class="mb-4">
                        <div class="row g-4 settings-section">
                            <div class="col-12 col-md-8">
                                <div class="app-card app-card-settings shadow-sm p-4">
                                    <div class="app-card-body">
                                        <?php
                                        if ($_POST) 
                                        {
                                            $qty = $_POST['qty'];
                                            $book_id = $_POST['book_id'];
                                            $id = $_POST['stock_id'];
                                            $contacts = mysql_query("
        SELECT * FROM contacts ORDER BY ID ASC") or die( mysql_error() );
    
    // If results
    if( mysql_num_rows( $contacts ) > 0 )
    ?>
                                            $sql = "UPDATE stock SET qty = '$qty', book_id = '$book_id' WHERE stock_id = '$id'";
                                            if (mysqli_query($conn, $sql)) {
                                                echo "Success!!";
                                                // $url = "?page=bank";
                                                // header('Location: ' . $url);
                                            } else {
                                                echo "Fail: " . $sql . "<br>" . mysqli_error($conn);
                                            }
                                            // mysqli_close($conn);
                                            $conn->close();
                                        }
                                        ?>
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                
                                                <label class="form-label">Stock ID</label>
                                                <input type="text" class="form-control" name="stock_id" value="<?=$result['stock_id']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Book ID</label>
                                                <input type="text" class="form-control" name="book_id" value="<?=$result['book_id']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" class="form-control" name="qty" value="<?=$result['qty']?>">
                                            </div>
                                            <button type="submit" class="btn btn-warning">Edit</button>
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
</div>